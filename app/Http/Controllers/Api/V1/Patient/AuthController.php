<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\LoginPrescRequest;
use App\Http\Requests\Api\V1\PatientRequest;
use App\Http\Requests\Api\V1\EditPatientRequest;
use App\Http\Resources\Api\V1\DefaultUserResource;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Http\Resources\Api\V1\SpecificPatientResource; 
use App\Http\Resources\Api\V1\SpecificPrescriberResource; 
use App\Models\Patient;
use App\Models\Prescriber;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\isNull;

class AuthController extends Controller
{
    public function signup(PatientRequest $request)
    {
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

        if (Prescriber::where('email', $request->email)->where('active', false)->get()->count() > 0) {
            return response()->json(new ErrorResource('Sua conta esta desativada.'), 422);

        }
        
        /** @var Prescriber $prescriber */
        $token = $prescriber->createToken('main')->plainTextToken;
        $user = new DefaultUserResource($prescriber);
        return response(compact('user', 'token'));
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

    public function patientInfo(Int $id)
    {
        $user = Patient::find($id);

        if (!isset($user)) {
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

        return new SpecificPrescriberResource($user);
    }

    public function editPatientInfo(int $id, Request $request)
    {
        try {

            $user = Patient::find($id);
    
            $request = $request->all();

            if (isset($request["password"])) {

                $request["password"] = bcrypt($request['password']);
            }

            $user->update($request);
            
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
                
            Storage::disk('local')->put("public/docs/patient/foto-perfil/foto-perfil-{$id}.jpg", file_get_contents($request->file('foto_perfil')->getPathname()));
            Patient::where("id", $id)->update([
                "uploaded_foto_perfil" => "true"
            ]);

            return response()->json(new SuccessResource("Upload de foto de perfil do paciente de id: {$id} feito com sucesso"), 200);
            
        } else {

            return response()->json(new ErrorResource("Verifique os dados de Request."), 422);

        }
    }

    public function uploadFotoPerfilPresc(Request $request)
    {
        $id = Auth::guard("webPresc")->id();

        if ($request->hasFile('foto_perfil')) {
                
            Storage::disk('local')->put("public/docs/prescriber/foto-perfil/foto-perfil-{$id}.jpg", file_get_contents($request->file('foto_perfil')->getPathname()));
            Prescriber::where("id", $id)->update([
                "uploaded_foto_perfil" => "true"
            ]);

            return response()->json(new SuccessResource("Upload de foto de perfil do prescriber de id: {$id} feito com sucesso"), 200);
            
        } else {

            return response()->json(new ErrorResource("Verifique os dados de Request."), 422);

        }
    }

    public function uploadDocs(Request $request)
    {
        $id = 1;

        try {
            if(!isNull($request->file('crm_frente'))) {
                
                Storage::disk('local')->put("public/docs/crm-frente/crm-frente-{$id}.jpg", file_get_contents($request->file('crm_frente')->getPathname()));
                Prescriber::where("id", $id)->update([
                    "uploaded_crm_frente" => "true"
                ]);
                
            }
            
            if(!isNull($request->file('crm_verso'))) {
                
                Storage::disk('local')->put("public/docs/crm-verso/crm-verso-{$id}.jpg", file_get_contents($request->file('crm_verso')->getPathname()));
                Prescriber::where("id", $id)->update([
                    "uploaded_crm_verso" => "true"
                ]);
                
            }
            
            if(!isNull($request->file('selfie_com_doc'))) {
                
                Storage::disk('local')->put("public/docs/selfie-com-doc/selfie-com-doc-{$id}.jpg", file_get_contents($request->file('selfie_com_doc')->getPathname()));
                Prescriber::where("id", $id)->update([
                    "uploaded_selfie_com_doc" => "true"
                ]);
                
            }
            
            if(!isNull($request->file('foto_perfil'))) {
                
                Storage::disk('local')->put("public/docs/foto-perfil/foto-perfil-{$id}.jpg", file_get_contents($request->file('foto_perfil')->getPathname()));
                Prescriber::where("id", $id)->update([
                    "uploaded_foto_perfil" => "true"
                ]);
                
            }
            
            return response()->json(new SuccessResource("Upload de documentos feito com sucesso"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getDocuments()
    {
        $id = 1;
        
        try {

            $response = [
                "crm_frente" => asset("storage/docs/crm-frente/crm-frente-{$id}.jpg"),
                "crm_verso" => asset("storage/docs/crm-verso/crm-verso-{$id}.jpg"),
                "selfie_com_doc" => asset("storage/docs/selfie-com-doc/selfie-com-doc-{$id}.jpg"),
                "foto_perfil" => asset("storage/docs/foto-perfil/foto-perfil-{$id}.jpg")
            ];
            
            return response()->json(new SuccessResource($response), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getCRMFrente()
    {
        $id = 1;
        
        try {

            return Storage::download("/public/docs/crm-frente/crm-frente-{$id}.jpg");
            

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getCRMVerso()
    {
        $id = 1;
        
        try {

            return Storage::download("/public/docs/crm-verso/crm-verso-{$id}.jpg");


        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getSelfieComDoc()
    {
        $id = 1;
        
        try {

            return Storage::download("/public/docs/selfie-com-doc/selfie-com-doc-{$id}.jpg");

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getFotoPerfilPatient()
    {
        $id = Auth::guard("webPatient")->id();
        
        try {

            $response = [
                "foto_perfil" => asset("storage/docs/patient/foto-perfil/foto-perfil-{$id}.jpg")
            ];
            
            return response()->json(new SuccessResource($response), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getFotoPerfilPrescriber()
    {
        $id = Auth::guard("webPatient")->id();
        
        try {

            $response = [
                "foto_perfil" => asset("storage/docs/prescriber/foto-perfil/foto-perfil-{$id}.jpg")
            ];
            
            return response()->json(new SuccessResource($response), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
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
