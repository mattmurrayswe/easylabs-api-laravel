<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\PatientUsesMedicineRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\PatientUsesMedicine;
use App\Models\PatientSymptoms;
use Illuminate\Http\Request;

class PatientUsesMedicineController extends Controller
{
    public function informeMed(Request $request)
    {
        try {
            PatientUsesMedicine::create($request->all());
            return response()->json(new SuccessResource("Uso do remédo feito com sucesso!"), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }
}
