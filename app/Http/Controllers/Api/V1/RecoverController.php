<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RecoverController extends Controller
{
    public function recoverPassword(Request $request)
    {
        $code = "02402";

        $request->validate([
            'email' => "required|email|exists:users,email",
            'cellphone' => "string"
        ]);

        return response([
            "recoveryCode" => $code
        ], 200);
    }

    public function confirmCode(Request $request)
    {
        $recoveryCode = "02402";

        $code = $request['code'];

        if ($code === $recoveryCode) {
            return response([
                "message" => "Your recovery code had been successfully validated."
            ]);
        }

        return response([
            "message" => "Invalid recovery code."
        ]);
    }

    public function approbation(Request $request)
    {
        $request->validate([
            'cpf' => "required|string|exists:users,cpf",
        ]);

        return response([
            "message" => "Approved!"
        ], 200);
    }

    public function newPassword(Request $request, User $user)
    {
        $request->validate([
            'email' => "required|email|exists:users,email",
            'password' => ["required", Password::min(8)->letters()->symbols()]
        ]);

        if (isset($request['password'])) {
            $request['password'] = bcrypt($request['password']);
        }

        User::where('email', $request['email'])->update(['password' => $request['password']]);

        return response([
            "message" => "Password changed successfully!"
        ]);
    }
}
