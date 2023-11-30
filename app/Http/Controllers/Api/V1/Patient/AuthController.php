<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Domain\FotoPerfilUploader;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\LoginPrescRequest;
use App\Http\Requests\Api\V1\PatientRequest;
use App\Http\Resources\Api\V1\DefaultUserResource;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Http\Resources\Api\V1\SpecificPatientResource; 
use Illuminate\Support\Facades\Response;
use App\Models\Patient;
use App\Models\Prescriber;
use App\Models\Cuidador;
use App\Models\PatientDocs;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Imagick;

class AuthController extends Controller
{
    public function signup(PatientRequest $request)
    {
        $request["cpf"] = substr($request["cpf"], 0, 3) . '.' . substr($request["cpf"], 3, 3) . '.' . substr($request["cpf"], 6, 3) . '-' . substr($request["cpf"], 9, 2);

        $request->merge([
            'active' => true,
        ]);

        $request['password'] = bcrypt($request['password']);
        
        $user = Patient::create($request->all());

        $token = $user->createToken('main')->plainTextToken;

        $user = new DefaultUserResource($user);

        return response(compact('user', 'token'));
    }

    public function signupPrescriber(Request $request)
    {
        $customMessages = [
            'email.unique' => 'Este email já foi cadastrado',
            'crm.unique' => 'Este CRM já foi cadastrado',
            'cpf.unique' => 'Este CPF já foi cadastrado',
        ];
    
        $validatedData = $request->validate([
            'email' => 'required|email|unique:prescribers',
            'crm' => 'required|unique:prescribers',
            'cpf' => 'required|unique:prescribers',
        ], $customMessages);
    
        try {
            $request['password'] = bcrypt($request['password']);
    
            $prescriber = $request->all();
            $prescriber = array_merge($request->all(), ["active" => true], ["documents" => '']);
    
            $user = Prescriber::create($prescriber);
    
            $token = $user->createToken('main')->plainTextToken;
    
            $user = new DefaultUserResource($user);
    
            return response(compact('user', 'token'));
    
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function login(LoginRequest $request)
    {   
        $credentials = $request->validated();
        $patient = Patient::where('email', $request->email)->first();
        if (!$patient || !Hash::check($request->password, $patient->password)) {
            return response()->json(new ErrorResource('Email ou senha incorreto.'), 422);
        }

        if (Patient::where('email', $request->email)->IsInactive()->get()->count() > 0) {
            return response()->json(new ErrorResource('Sua conta esta desativada.'), 422);
        }
        
        /** @var Patient $patient */
        $token = $patient->createToken('main')->plainTextToken;
        $user = new DefaultUserResource($patient);
        return response(compact('user', 'token'));
    }

    public function loginPrescriber(LoginPrescRequest $request)
    { 
        $credentials = $request->validated();
        $prescriber = Prescriber::where('email', $request->email)->first();
    
        if (!$prescriber || !Hash::check($request->password, $prescriber->password)) {
            return response()->json(new ErrorResource('Email ou senha incorreto.'), 422);
        }
    
        if ($prescriber->active === false) {
            return response()->json(new ErrorResource('Sua conta está desativada.'), 422);
        }
    
        $pendingVerificationsWithMotives = [];

        if ($prescriber->ok_crm_frente === "false") {
            $motivo_crm_frente = $prescriber->motivo_crm_frente ?? 'Motivo não especificado.';
            $pendingVerificationsWithMotives[] = "CRM frente recusado: $motivo_crm_frente";
        }
        
        if ($prescriber->ok_crm_verso === "false") {
            $motivo_crm_verso = $prescriber->motivo_crm_verso ?? 'Motivo não especificado.';
            $pendingVerificationsWithMotives[] = "CRM verso recusado: $motivo_crm_verso";
        }
        
        if ($prescriber->ok_selfie_com_doc === "false") {
            $motivo_selfie_com_doc = $prescriber->motivo_selfie_com_doc ?? 'Motivo não especificado.';
            $pendingVerificationsWithMotives[] = "Selfie com Documento recusado: $motivo_selfie_com_doc";
        }
        
        
        if (!empty($pendingVerificationsWithMotives)) {
            $user = new DefaultUserResource($prescriber);
            $token = $prescriber->createToken('main')->plainTextToken;
            $pendingVerificationsText = implode("\n", $pendingVerificationsWithMotives);
            return response()->json([
                "status" => 3, //Recusado
                "message" => "Documentos recusados!",
                "user" => $user,
                "token" => $token,
                "motive" => $pendingVerificationsText
            ], 200);
        }

        if (
            $prescriber->ok_crm_frente === "" ||
            $prescriber->ok_crm_verso === "" ||
            $prescriber->ok_selfie_com_doc  === ""
        ) {
            return response()->json(new ErrorResource([
                "status" => 2, //Em análise
                "message" => "Existem documentos pendentes de análise"
            ]), 422);  
        }
    
        /** @var Prescriber $prescriber */
        $token = $prescriber->createToken('main')->plainTextToken;
        $user = new DefaultUserResource($prescriber);
        return response()->json([
            "user" => $user,
            "token" => $token,
            "status" => 1 //Documentos aprovados
        ]);
    }
    

    public function logout(Request $request)
    {
        /** @var Patient $user */
        Auth::guard('webPatient')->user()->currentAccessToken()->delete();
        return response('', 204);
    }

    public function logoutPresc(Request $request)
    {
        /** @var Prescriber $user */
        Auth::guard('webPresc')->user()->currentAccessToken()->delete();
        return response('', 204);
    }

    public function patientInfo(int $id)
    {
        $user = Patient::with('cuidador')->find($id);
    
        if (!$user) {
            return response()->json(new ErrorResource('Paciente nao encontrado.'), 422);
        }
    
        return new SpecificPatientResource($user);
    }

    public function prescInfo(Int $id)
    {
        $user = Prescriber::find($id);

        if (!isset($user)) {
            return response()->json(new ErrorResource('Paciente nao encontrado.'), 422);

        }

        return response()->json(new SuccessResource($user), 200);
    }

    public function editPatientInfo(int $id, Request $request)
    {
        try {
            $patient = Patient::find($id);
    
            if (!$patient) {
                return response()->json(new ErrorResource("Paciente não encontrado"), 404);
            }
    
            $patientData = $request->except(['nome_cuidador', 'telefone_cuidador', 'relacao_ou_parentesco_cuidador']);
    
            if ($request->has('password')) {
                $patientData['password'] = bcrypt($request->input('password'));
            }
    
            $patient->update($patientData);
    
            if (
                $request->has('nome_cuidador') ||
                $request->has('telefone_cuidador') ||
                $request->has('relacao_ou_parentesco_cuidador')
            ) {
                $cuidadorData = [];
            
                if ($request->has('nome_cuidador')) {
                    $cuidadorData['nome'] = $request->input('nome_cuidador');
                }
                
                if ($request->has('telefone_cuidador')) {
                    $cuidadorData['telefone'] = $request->input('telefone_cuidador');
                }
                
                if ($request->has('relacao_ou_parentesco_cuidador')) {
                    $cuidadorData['relacao_ou_parentesco'] = $request->input('relacao_ou_parentesco_cuidador');
                }
                
                $cuidador = $patient->cuidador;
                
                if (!$cuidador) {
                    $cuidador = new Cuidador($cuidadorData);
                    $cuidador->save();
                    $patient->id_cuidador = $cuidador->id;
                } else {
                    $cuidador->update($cuidadorData);
                }
            }
    
            $patient->save();
    
            return response()->json(new SuccessResource("Paciente editado com sucesso"), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function editPassword(Request $request)
    {
        try {

            $id = Auth::guard("webPatient")->id();

            $user = Patient::find($id);
    
            $request = $request->all();

            
            if (Hash::check($request['old_password'], $user->getAttributes()["password"])) {

                $request["password"] = bcrypt($request['new_password']);

                $user->update($request);
                
                return response()->json(new SuccessResource("Senha do paciente editada com sucesso!"), 200);

            } else {
                
                return response()->json(new ErrorResource("Senha atual incorreta!"), 400);

            }
            

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function editPrescInfo(int $id, Request $request)
    {
        try {

            $user = Prescriber::find($id);
    
            $request = $request->all();

            if (isset($request["password"])) {

                $request["password"] = bcrypt($request['password']);
            }

            $user->update($request);
            
            return response()->json(new SuccessResource("Prescritor editado com sucesso"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function uploadFotoPerfilPatient(Request $request)
    {
        $id = Auth::guard("webPatient")->id();
        
        if ($request->hasFile('foto_perfil')) {

            $path = "patient/foto-perfil/foto-perfil-{$id}.jpg";
            $fileContents = file_get_contents($request->file('foto_perfil')->getPathname());
    
            Storage::disk('s3')->put($path, $fileContents, 'public');
    
            $publicUrl = Storage::disk('s3')->url($path);
    
            Patient::where("id", $id)->update([
                "uploaded_foto_perfil" => $publicUrl
            ]);
    
            return response()->json([
                'message' => "Upload de foto de perfil do paciente de id: {$id} feito com sucesso",
                'url' => $publicUrl,
            ], 200);

        } else {

            return response()->json(new ErrorResource("Verifique os dados de Request."), 422);

        }
    }

    public function uploadFotoPerfilPresc(Request $request)
    {
        $id = Auth::guard("webPresc")->id();

        if ($request->hasFile('foto_perfil')) {

            $publicUrl = FotoPerfilUploader::uploadFotoPerfil($id, $request->file('foto_perfil'));

            return response()->json([
                'message' => "Upload de foto de perfil do prescriber de id: {$id} feito com sucesso",
                'url' => $publicUrl,
            ], 200);

        } else {

            return response()->json(new ErrorResource("Verifique os dados de Request."), 422);

        }
    }

    public function uploadFotoPerfilDomain($id, $file) {

        $path = "prescriber/foto-perfil/foto-perfil-{$id}.jpg";
        $fileContents = file_get_contents($file->getPathname());
        Storage::disk('s3')->put($path, $fileContents, 'public');
        $publicUrl = Storage::disk('s3')->url($path);
        Prescriber::where("id", $id)->update([
            "uploaded_foto_perfil" => $publicUrl
        ]);
        return $publicUrl;
    }

    public function uploadDocsNamed(Request $request)
    {
        $request->validate([
            "doc_name" => "required|string"
        ]);

        $id = Auth::guard("webPatient")->id();

        try {
            if ($request->hasFile($request->input('doc_name'))) {
                $file = $request->file($request->input('doc_name'));
                $path = "docs/patient/{$request->input('doc_name')}-{$id}.jpg";
                $fileFormat = $file->getClientOriginalExtension();

                if (strtoupper($fileFormat) === 'HEIC') {
                    $heicImagePath = $file->getPathname();
                    $imagick = new Imagick($heicImagePath);
                    $imagick->setImageFormat('jpeg');
                    Storage::disk('s3')->put($path, $imagick->getImageBlob(), 'public');
                } else {
                    $fileContents = file_get_contents($file->getPathname());
                    Storage::disk('s3')->put($path, $fileContents, 'public');
                }

                $publicUrl = Storage::disk('s3')->url($path);
                PatientDocs::create([
                    "patient_id" => $id,
                    "doc_name" => $request->input('doc_name'),
                    "doc_url" => $publicUrl
                ]);

                return response()->json(new SuccessResource([
                    "message" => "Upload de documentos feito com sucesso",
                    "doc_url" => $publicUrl
                ]), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function uploadedDocsNamed(Request $request)
    {
        try {
            $patientDocs = PatientDocs::where([
                "patient_id" => Auth::guard("webPatient")->id()
            ])->get();

            return response()->json(new SuccessResource([
                "docs" => $patientDocs
            ]), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function uploadedDocsNamedDelete(Request $request)
    {
        try {

            $patientDoc = PatientDocs::find($request->input('doc_named_id'));
    
            $extracted_part = Str::after($patientDoc->doc_url, '.com');
    
            if ($extracted_part) {
                echo Storage::disk('s3')->delete($extracted_part); 
            }
    
            $patientDoc->delete();
    
            return response()->json(['message' => 'Documento do paciente excluído com sucesso']);

        } catch (\Throwable $th) {

            return response()->json($th->getMessage());

        }
    }

    public function uploadDocs(Request $request)
    {
        $id = Auth::guard("webPresc")->id();
        $uploadedUrls = [];
    
        try {
            if ($request->hasFile('crm_frente')) {
                $file = $request->file('crm_frente');
                $path = "docs/crm-frente/crm-frente-{$id}.jpg";
                $fileFormat = $file->getClientOriginalExtension();
                if (strtoupper($fileFormat) === 'HEIC') {
                    $heicImagePath = $file->getPathname();
                    $imagick = new Imagick($heicImagePath);
                    $imagick->setImageFormat('jpeg');
                    Storage::disk('s3')->put($path, $imagick->getImageBlob(), 'public');
                } else {
                    $fileContents = file_get_contents($file->getPathname());
                    Storage::disk('s3')->put($path, $fileContents, 'public');
                }
                $publicUrl = Storage::disk('s3')->url($path);
                Prescriber::where("id", $id)->update([
                    "uploaded_crm_frente" => $publicUrl,
                    "ok_crm_frente" => "",
                    "motivo_crm_frente" => ""
                ]);
                $uploadedUrls['crm_frente'] = $publicUrl;
            }
    
            if ($request->hasFile('crm_verso')) {
                $file = $request->file('crm_verso');
                $path = "docs/crm-verso/crm-verso-{$id}.jpg";
                $fileFormat = $file->getClientOriginalExtension();
                if (strtoupper($fileFormat) === 'HEIC') {
                    $heicImagePath = $file->getPathname();
                    $imagick = new Imagick($heicImagePath);
                    $imagick->setImageFormat('jpeg');
                    Storage::disk('s3')->put($path, $imagick->getImageBlob(), 'public');
                } else {
                    $fileContents = file_get_contents($file->getPathname());
                    Storage::disk('s3')->put($path, $fileContents, 'public');
                }
                $publicUrl = Storage::disk('s3')->url($path);
                Prescriber::where("id", $id)->update([
                    "uploaded_crm_verso" => $publicUrl,
                    "ok_crm_verso" => "",
                    "motivo_crm_verso" => ""
                ]);
    
                $uploadedUrls['crm_verso'] = $publicUrl;
            }
    
            if ($request->hasFile('selfie_com_doc')) {
                $file = $request->file('selfie_com_doc');
                $path = "docs/selfie-com-doc/selfie-com-doc-{$id}.jpg";
                $fileFormat = $file->getClientOriginalExtension();
                if (strtoupper($fileFormat) === 'HEIC') {
                    $heicImagePath = $file->getPathname();
                    $imagick = new Imagick($heicImagePath);
                    $imagick->setImageFormat('jpeg');
                    Storage::disk('s3')->put($path, $imagick->getImageBlob(), 'public');
                } else {
                    $fileContents = file_get_contents($file->getPathname());
                    Storage::disk('s3')->put($path, $fileContents, 'public');
                }
                $publicUrl = Storage::disk('s3')->url($path);
                Prescriber::where("id", $id)->update([
                    "uploaded_selfie_com_doc" => $publicUrl,
                    "ok_selfie_com_doc" => "",
                    "motivo_selfie_com_doc" => ""
                ]);
    
                $uploadedUrls['selfie_com_doc'] = $publicUrl;
            }
    
            if ($request->hasFile('foto_perfil')) {
                $publicUrl = FotoPerfilUploader::uploadFotoPerfil($id, $request->file('foto_perfil'));
                $uploadedUrls['foto_perfil'] = $publicUrl;
            }
    
            return response()->json(new SuccessResource([
                "message" => "Upload de documentos feito com sucesso",
                "uploaded_urls" => $uploadedUrls
            ]), 200);
    
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getDocuments()
    {
        $id = Auth::guard("webPresc")->id();
        
        try {

            $docs = Prescriber::where("id", $id)->get([
                "uploaded_crm_frente",
                "uploaded_crm_verso",
                "uploaded_selfie_com_doc",
            ]);
            
            return response()->json(new SuccessResource($docs), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function downloadCRMFrente($id)
    {
        try {
            $filePath = "docs/crm-frente/crm-frente-{$id}.jpg";
    
            $fileContents = Storage::disk('s3')->get($filePath);
    
            // Set the appropriate Content-Type for the file you are serving.
            $contentType = 'image/jpeg'; // You can adjust this according to the file type.
    
            // Set response headers for download
            $headers = [
                'Content-Type' => $contentType,
                'Content-Disposition' => 'attachment; filename="' . basename($filePath) . '"',
            ];
    
            // Return the file as a download response.
            return Response::make($fileContents, 200, $headers);
    
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
            
        }
    }

    public function downloadCRMVerso($id)
    {        
        try {
            $filePath = "docs/crm-verso/crm-verso-{$id}.jpg";
    
            $fileContents = Storage::disk('s3')->get($filePath);
    
            // Set the appropriate Content-Type for the file you are serving.
            $contentType = 'image/jpeg'; // You can adjust this according to the file type.
    
            // Set response headers for download
            $headers = [
                'Content-Type' => $contentType,
                'Content-Disposition' => 'attachment; filename="' . basename($filePath) . '"',
            ];
    
            // Return the file as a download response.
            return Response::make($fileContents, 200, $headers);
    
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
            
        }
    }

    public function downloadSelfieComDoc($id)
    {
        try {
            $filePath = "docs/selfie-com-doc/selfie-com-doc-{$id}.jpg";
    
            $fileContents = Storage::disk('s3')->get($filePath);
    
            // Set the appropriate Content-Type for the file you are serving.
            $contentType = 'image/jpeg'; // You can adjust this according to the file type.
    
            // Set response headers for download
            $headers = [
                'Content-Type' => $contentType,
                'Content-Disposition' => 'attachment; filename="' . basename($filePath) . '"',
            ];
    
            // Return the file as a download response.
            return Response::make($fileContents, 200, $headers);
    
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
            
        }
    }

    public function getFotoPerfilPatient()
    { 
        try {
            $id = Auth::guard("webPatient")->id();
            
            $foto = Patient::where("id", $id)->get([
                "uploaded_foto_perfil"
            ]);

            if ($foto === "false") {
                $data = [
                    'uploaded_foto_perfil' => null,
                ];
            } else {
                $data = [
                    'uploaded_foto_perfil' => $foto,
                ];
            }
            
            return response()->json(new SuccessResource($data), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function getFotoPerfilPrescriber()
    {
        $id = Auth::guard("webPresc")->id();
        
        try {

            $foto = Prescriber::where("id", $id)->value("uploaded_foto_perfil");

            if ($foto === "false") {
                $data = [
                    'uploaded_foto_perfil' => null,
                ];
            } else {
                $data = [
                    'uploaded_foto_perfil' => $foto,
                ];
            }
            
            return response()->json(new SuccessResource($data), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function deleteFotoPerfilPrescriber()
    {        
        try {
            $id = Auth::guard("webPresc")->id();
    
            $filePath = "docs/selfie-com-doc/selfie-com-doc-{$id}.jpg";

            if (Storage::disk('s3')->exists($filePath)) {

                Storage::disk('s3')->delete($filePath);

            }

            Prescriber::where("id", $id)->update([
                "uploaded_foto_perfil" => "false"
            ]);
            
            return response()->json(new SuccessResource("Foto de perfil deletada com sucesso."), 204);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function deleteFotoPerfilPatient()
    {        
        try {
            $id = Auth::guard("webPatient")->id();
    
            $filePath = "docs/selfie-com-doc/selfie-com-doc-{$id}.jpg";

            if (Storage::disk('s3')->exists($filePath)) {

                Storage::disk('s3')->delete($filePath);

            }

            Patient::where("id", $id)->update([
                "uploaded_foto_perfil" => "false"
            ]);
            
            return response()->json(new SuccessResource("Foto de perfil deletada com sucesso."), 204);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function editCRMFrente(Request $request, $id)
    {
        if ($request->is_valid === "false") {
            
            Prescriber::where("id", $id)->update([
                "ok_crm_frente" => "false",
                "motivo_crm_frente" => $request->motivo
            ]);
        }

        if ($request->is_valid === "true") {

            Prescriber::where("id", $id)->update([
                "ok_crm_frente" => "true"
            ]);
        }
        
        try {

            return response()->json(new SuccessResource("Status do documento crm_frente alterado com sucesso!"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function editCRMVerso(Request $request, $id)
    {
        if ($request->is_valid === "false") {
            
            Prescriber::where("id", $id)->update([
                "ok_crm_verso" => "false",
                "motivo_crm_verso" => $request->motivo
            ]);
        }

        if ($request->is_valid === "true") {

            Prescriber::where("id", $id)->update([
                "ok_crm_verso" => "true"
            ]);
        }
        
        try {

            return response()->json(new SuccessResource("Status do documento crm_verso alterado com sucesso!"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function editSelfieComDoc(Request $request, $id)
    {
        if ($request->is_valid === "false") {
            
            Prescriber::where("id", $id)->update([
                "ok_selfie_com_doc" => "false",
                "motivo_selfie_com_doc" => $request->motivo
            ]);
        }

        if ($request->is_valid === "true") {

            Prescriber::where("id", $id)->update([
                "ok_selfie_com_doc" => "true"
            ]);
        }
        
        try {

            return response()->json(new SuccessResource("Status do documento selfie_com_doc alterado com sucesso!"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function editFotoPerfil(Request $request, $id)
    {
        if ($request->is_valid === "false") {
            
            Prescriber::where("id", $id)->update([
                "ok_crm_frente" => "false",
                "motivo_crm_frente" => $request->motivo
            ]);
        }

        if ($request->is_valid === "true") {

            Prescriber::where("id", $id)->update([
                "ok_crm_frente" => "true"
            ]);
        }
        
        try {

            return response()->json(new SuccessResource("Status do documento crm_frente alterado com sucesso!"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function redirectToGoogle(Request $request)
    {
         return Socialite::driver('google')
            ->redirect();
    }

    public function cep(Request $request)
    {
        try {
            $cep = $request->all()["cep"];

            $client = new Client();

            $res = $client->request(
                "GET",
                "https://viacep.com.br/ws/$cep/json/"
            );
            
            return response()->json(new SuccessResource((string) $res->getBody()), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function docsStatusCpf(Request $request)
    {
        try {
            $formattedCPF = substr($request->cpf, 0, 3) . '.' . substr($request->cpf, 3, 3) . '.' . substr($request->cpf, 6, 3) . '-' . substr($request->cpf, 9, 2);

            $prescriber = Prescriber::where("cpf", $formattedCPF)->first();

            if (!$prescriber) {
                return response()->json(new ErrorResource("O usuário não está cadastrado na base"), 404); 
            }

            $pendingVerificationsWithMotives = [];

            if ($prescriber->ok_crm_frente !== "true") {
                $motivo_crm_frente = $prescriber->motivo_crm_frente ?? 'Ainda em análise.';
                $pendingVerificationsWithMotives[] = "Verificação de documento CRM frente: $motivo_crm_frente";
            }
            
            if ($prescriber->ok_crm_verso !== "true") {
                $motivo_crm_verso = $prescriber->motivo_crm_verso ?? 'Ainda em análise.';
                $pendingVerificationsWithMotives[] = "Verificação de documento CRM verso: $motivo_crm_verso";
            }
            
            if ($prescriber->ok_selfie_com_doc !== "true") {
                $motivo_selfie_com_doc = $prescriber->motivo_selfie_com_doc ?? 'Ainda em análise.';
                $pendingVerificationsWithMotives[] = "Verificação de selfie com documento: $motivo_selfie_com_doc";
            }
            
            if (!empty($pendingVerificationsWithMotives)) {
                // $errorMessage = "Verificações pendentes com motivos:\n$pendingVerificationsText";
                $errorMessage = "Seu cadastro ainda está em análise!";
                return response()->json(new SuccessResource([
                    "message" => $errorMessage,
                    "motivos" => $pendingVerificationsWithMotives
                ]), 200);
            }             
            return response()->json(new SuccessResource(
                ["message" => "Não há pendências para o CPF $request->cpf, cadastro aprovado com sucesso."]
            ), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function handleGoogleCallback(Request $request)
    {

        $user = Socialite::driver('google')->user();

        $existingUser = Patient::where('email', $user->getEmail())->first();

        if (Patient::where('email', $user->getEmail())->IsInactive()->get()->count() > 0) {
            return response()->json(new ErrorResource('Sua conta esta desativada.'), 422);
        }

        if ($existingUser) {

            $token = $existingUser->createToken('main')->plainTextToken;

            $data = new DefaultUserResource($existingUser);

            return response(compact('data', 'token'));
            
        }

        $newPatient = Patient::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt('breaseapp'),
            'active' => true,
        ]);

        
        auth()->login($newPatient, true);

        $token = $newPatient->createToken('main')->plainTextToken;

        $data = new DefaultUserResource($newPatient);

        return response(compact('data', 'token'));
    }
}
