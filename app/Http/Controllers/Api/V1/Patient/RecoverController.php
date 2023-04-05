<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\PatientPasswordRecover;
use App\Notifications\PasswordRecoveryNotification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RecoverController extends Controller
{
    public function recoverPassword(Request $request)
    {
        
        $request->validate([
            'email' => "required|email|exists:patients,email",
        ]);

        if (PatientPasswordRecover::where('email', $request->email)->first()) {
            $this->deleteRecoverToken($request);
        }

        $code = $this->generateRecoverCode();
        $this->storeGeneratedCode($request->email, $code);
        $this->sendCode($request, $code);

        return response([
            "recoveryCode" => $code
        ], 200);
    }

    public function confirmCode(Request $request)
    {

        $request->validate([
            'email' => "required|email|exists:patients,email",
            'token' => "required|min:6|max:6",
        ]);
        $recoveryCode = PatientPasswordRecover::where('email', $request->email)->first();

        $code = $request['token'];

        if ($code === $recoveryCode->token) {

            $this->deleteRecoverToken($request);

            return response([
                "message" => "Seu código foi validado com sucesso!."
            ]);
        }

        return response([
            "message" => "Código de validação inválido."
        ]);
    }

    public function newPassword(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:patients,email",
            'password' => ["required", Password::min(8)->letters()->symbols()]
        ]);

        if (isset($request['password'])) {
            $request['password'] = bcrypt($request['password']);
        }

        Patient::where('email', $request['email'])->update(['password' => $request['password']]);

        return response([
            "message" => "Senha alterada com sucesso!"
        ]);
    }

    public function sendNewCode(Request $request)
    {
        $this->deleteRecoverToken($request);
        return $this->recoverPassword($request);
    }
    private function generateRecoverCode()
    {
        return sprintf("%06d", mt_rand(1, 999999));
    }

    private function storeGeneratedCode($email, $code)
    {
        try {

            PatientPasswordRecover::create([
                'email' => $email,
                'token' => $code
            ]);

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    private function deleteRecoverToken($request)
    {
        $recover = PatientPasswordRecover::find($request->email);
        if ($recover) {
            $recover->delete();
        }
    }

    private function sendCode($request, $code)
    {
        $patient = Patient::where('email', $request->email)->first();
        $patient->notify(new PasswordRecoveryNotification($code));
    }
}
