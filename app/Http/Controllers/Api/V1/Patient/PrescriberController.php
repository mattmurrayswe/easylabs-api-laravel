<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\Prescriber;
use App\Models\PatientTreatment;
use App\Models\Treatment;
use App\Models\TreatmentMedicine;
use Illuminate\Http\Request;

class PrescriberController extends Controller
{
    public function desativate($id)
    {
        $prescriber = Prescriber::find($id);

        try {
            $prescriber->update([
                'active' => false
            ]);

            return response()->json(new SuccessResource('Prescriber desativado com sucesso.'), 422);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
    }
    public function delete($id)
    {
        $prescriber = Prescriber::find($id);

        try {
            $prescriber->delete();

            return response()->json(new SuccessResource('Conta deletada com sucesso.'), 422);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th), 422);

        }
    }

    public function getPatientTreatments($id)
    {

        $patientTreatment = PatientTreatment::with('treatment')->with('patient')->where('patient_id', $id)->get();
        $response = [
            'patient' => [
                'id' => $patientTreatment[0]->patient->id,
                'name' => $patientTreatment[0]->patient->name,
                'treatment' => []
            ]
        ];

        foreach ($patientTreatment as $item) {
            $treatmentData = [
                'id' => $item->treatment->id,
                'name' => $item->treatment->name,
                'description' => $item->treatment->description,
                'timer_per_day' => $item->treatment->timer_per_day,
                'duration' => $item->treatment->duration,
                'how_many' => $item->treatment->how_many,
                'frequency' => $item->treatment->frequency,
                'start_treatment_date' => $item->start_treatment_date,
                'end_treatment_date' => $item->end_treatment_date,
                'medicine' => []
            ];

            $treamentMedicine = TreatmentMedicine::with('medicine')->where('treatment_id', $item->treatment->id)->get();
            foreach ($treamentMedicine as $medicineItem) {
                $medicineData = [
                    'medicine_id' => $medicineItem->medicine->id,
                    'name' => $medicineItem->medicine->name,
                    'presentation' => $medicineItem->medicine->presentation,
                    'concentration' => $medicineItem->medicine->concentration,
                    'volume_flask' => $medicineItem->medicine->volume_flask,
                    'formulation' => $medicineItem->medicine->formulation,
                    'lab' => $medicineItem->medicine->lab,
                ];
                $treatmentData['medicine'][] = $medicineData;

            }

            $response['patient']['treatment'][] = $treatmentData;


        }
       

        
        return response()->json(new SuccessResource($response), 200);
    }

    public function setTreatmentToPatient(Request $request){

        try {

            $request->validate([
                'patient_id' => "required|exists:patients,id",
                'treatment_id' => "required|exists:treatments,id",
            ]);
            
            //TODO
            // Validar se o paciente ja tem o tratamento cadastrado
            // Para não cadastrar por cima

            $patientTreatment = PatientTreatment::create($request->all());
            return response()->json(new SuccessResource($patientTreatment), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Paciente ou Tratamento nao encontrado'), 404);

        }
        
    }
}
