<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\PatientPasswordRecover;
use App\Models\Prescriber;
use App\Models\PrescriberPasswordRecover;
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

    public function recoverPasswordPresc(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:prescribers,email",
        ]);

        if (PrescriberPasswordRecover::where('email', $request->email)->first()) {
            $this->deleteRecoverTokenPresc($request);
        }

        $code = $this->generateRecoverCode();
        $this->storeGeneratedCodePresc($request->email, $code);
        $this->sendCodePresc($request, $code);

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
            return response()->json(new SuccessResource("Seu código foi validado com sucesso!"), 200);

        }

        return response()->json(new ErrorResource("Código de validação inválido."), 200);

    }

    public function confirmCodePresc(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:prescribers,email",
            'token' => "required|min:6|max:6",
        ]);

        $recoveryCode = PrescriberPasswordRecover::where('email', $request->email)->first();

        $code = $request['token'];

        if ($code === $recoveryCode->token) {

            $this->deleteRecoverTokenPresc($request);

            return response()->json(new SuccessResource("Seu código foi validado com sucesso!"), 200);

        }

        return response()->json(new ErrorResource("Código de validação inválido."), 200);

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

        
        return response()->json(new SuccessResource("Senha alterada com sucesso!"), 200);

    }

    public function newPasswordPresc(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:prescribers,email",
            'password' => ["required", Password::min(8)->letters()->symbols()]
        ]);

        if (isset($request['password'])) {
            $request['password'] = bcrypt($request['password']);
        }

        Prescriber::where('email', $request['email'])->update(['password' => $request['password']]);

        
        return response()->json(new SuccessResource("Senha alterada com sucesso!"), 200);

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

    private function storeGeneratedCodePresc($email, $code)
    {
        try {

            PrescriberPasswordRecover::create([
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

    private function deleteRecoverTokenPresc($request)
    {
        $recover = PrescriberPasswordRecover::find($request->email);
        if ($recover) {
            $recover->delete();
        }
    }

    private function sendCode($request, $code)
    {
        $patient = Patient::where('email', $request->email)->first();
        $patient->notify(new PasswordRecoveryNotification($code));
    }

    private function sendCodePresc($request, $code)
    {
        $patient = Prescriber::where('email', $request->email)->first();
        $patient->notify(new PasswordRecoveryNotification($code));
    }
}
