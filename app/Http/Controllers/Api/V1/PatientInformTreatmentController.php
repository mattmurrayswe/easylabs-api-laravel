<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\PatientInformTreatment;
use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Http\Controllers\Controller;


class PatientInformTreatmentController extends Controller
{
    public function informTreatment(Request $request)
    {   
        try {
            PatientInformTreatment::create($request->all());
            return response()->json(new SuccessResource("Uso do remédo feito com sucesso!"), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }
    
}
