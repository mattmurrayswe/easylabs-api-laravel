<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\ClinicAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicAdressController extends Controller
{
    public function getClinicAdress()
    {
        $user = Auth::guard("webPresc")->user();
        if (!$user->clinic_address) {
            return response()->json(new ErrorResource('Prescriber deve cadastrar um endereco de atendimento presencial!'), 200);
        }
        return response()->json(new SuccessResource($user->clinic_address), 200);
    }

    public function createClinicAdress(Request $request)
    {
        $user = Auth::guard("webPresc")->user();
        try {
            $clinicAdress = ClinicAdress::create($request->all());
    
            $user->update([
                'clinic_adress_id' => $clinicAdress->id
            ]);

            return response()->json(new SuccessResource('Clinica cadastrada com sucesso'), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nao foi possivel criar a clinica'), 200);
        }
    }

    public function updateClinicAdress(Request $request)
    {
        $user = Auth::guard("webPresc")->user();
        try {
            $clinic = ClinicAdress::findOrFail($user->clinic_address->id);
            $clinic->update($request->all());

            return response()->json(new SuccessResource('Clinica alterada com sucesso'), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nao foi possivel alterar a clinica'), 200);
        }
    }
}
