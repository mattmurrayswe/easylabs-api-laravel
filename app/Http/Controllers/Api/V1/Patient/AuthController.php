<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\PatientRequest;
use App\Http\Requests\Api\V1\EditPatientRequest;
use App\Http\Resources\Api\V1\DefaultUserResource;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Http\Resources\Api\V1\SpecificPatientResource;
use App\Models\Patient;
use App\Models\Prescriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            var_dump($request->all());
            
            // $request['password'] = bcrypt($request['password']);
        
            // $user = Prescriber::create($request->all());
    
            // $token = $user->createToken('main')->plainTextToken;
    
            // $user = new DefaultUserResource($user);
    
            // return response(compact('user', 'token'));

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

    public function logout(Request $request)
    {
        /** @var Patient $user */
        $user = $request->user();
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
}
