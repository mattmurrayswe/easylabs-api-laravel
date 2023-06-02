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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

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

            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function login(LoginRequest $request)
    {   
        $credentials = $request->validated();
        if (!Auth::attempt($credentials)) {
            return response()->json(new ErrorResource('Email ou senha incorreto.'), 422);

        }

        if (Patient::where('email', $request->email)->IsInactive()->get()->count() > 0) {
            return response()->json(new ErrorResource('Sua conta esta desativada.'), 422);
        }
        
        /** @var Patient $patient */
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;

        $user = new DefaultUserResource($user);

        return response(compact('user', 'token'));
    }

    public function loginPrescriber(LoginPrescRequest $request)
    { 
        $credentials = $request->validated();

        $authPresc = Auth::guard("webPresc");

        if (!$authPresc->attempt($credentials)) {
            return response()->json(new ErrorResource('Email ou senha incorreto.'), 422);

        }

        if (Prescriber::where('email', $request->email)->where('active', false)->get()->count() > 0) {
            return response()->json(new ErrorResource('Sua conta esta desativada.'), 422);

        }
        
        /** @var Prescriber $prescriber */
        $user = $authPresc->user();

        $token = $user->createToken('main')->plainTextToken;

        $user = new DefaultUserResource($user);

        return response(compact('user', 'token')); 
    }

    public function logout(Request $request)
    {
        /** @var Patient $user */
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response('', 204);
    }

    public function logoutPresc(Request $request)
    {
        /** @var Prescriber $user */
        $user = $request->user("webPresc");
        $user->currentAccessToken()->delete();

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

            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function uploadDocs(int $id, Request $request)
    {
        try {
            Storage::disk('local')->put("public/docs/crm-frente/crm-frente-{$id}.jpg", file_get_contents($request->file('crm_frente')->getPathname()));
            Storage::disk('local')->put("public/docs/crm-verso/crm-verso-{$id}.jpg", file_get_contents($request->file('crm_verso')->getPathname()));
            Storage::disk('local')->put("public/docs/selfie-com-doc/selfie-com-doc-{$id}.jpg", file_get_contents($request->file('selfie_com_doc')->getPathname()));
            Storage::disk('local')->put("public/docs/foto-perfil/foto-perfil-{$id}.jpg", file_get_contents($request->file('foto_perfil')->getPathname()));
            
            return response()->json(new SuccessResource("Upload de documentos feito com sucesso"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function getDocuments(int $id)
    {
        try {
            $response = [
                "crm_frente" => asset("storage/docs/crm-frente/crm-frente-{$id}.jpg"),
                "crm_verso" => asset("storage/docs/crm-verso/crm-verso-{$id}.jpg"),
                "selfie_com_doc" => asset("storage/docs/selfie-com-doc/selfie-com-doc-{$id}.jpg"),
                "foto_perfil" => asset("storage/docs/foto-perfil/foto-perfil-{$id}.jpg")
            ];
            
            return response()->json(new SuccessResource($response), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function redirectToGoogle(Request $request)
    {
         return Socialite::driver('google')
            ->redirect();
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
