<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\PatientUsesMedicineRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\PatientUsesMedicine;
use App\Models\PatientSymptoms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientUsesMedicineController extends Controller
{
    public function informMed(Request $request)
    {
        try {
     
            $created_at = $request->created_at ?? date('Y-m-d H:i:s');

            $data = [
                "patient_id" => Auth::guard("webPatient")->id(),
                "medicine_id" => $request->medicine_id,
                "treatment_id" => $request->treatment_id,
                "howMany" => $request->how_many,
                "created_at" => $created_at
            ];

            PatientUsesMedicine::create($data);

            return response()->json(new SuccessResource("Uso do medicamento feito com sucesso!"), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }

    public function listInformedMed()
    {
        try {
            $usedMedicines = PatientUsesMedicine::where('patient_id', Auth::guard("webPatient")->id())->get()->toArray();

            return response()->json(new SuccessResource($usedMedicines), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }

    public function informedMedPeriod(Request $request)
    {
        try {
            $request->validate([
                'start_time' => 'required|date',
                'end_time' => 'required|date',
                'id_patient' => 'required|integer',
            ]);
        
            $medicines = PatientUsesMedicine::
                where('created_at', '>', $request['start_time'])->
                where('created_at', '<', $request['end_time'])->
                where('patient_id', $request->id_patient)->with('medicine')->with('treatmentHasMedicines')->get()->toArray();
        
            return response()->json(new SuccessResource($medicines), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }

    public function listInformedMedPresc(Request $request)
    {
        try {
            
            $usedMedicines = PatientUsesMedicine::where('patient_id', $request->id_patient)->with('medicine')->get()->toArray();

            return response()->json(new SuccessResource($usedMedicines), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Medicamento ou paciente nao existentes!"), 422);
        }
    }
}
