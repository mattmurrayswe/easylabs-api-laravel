<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\Prescriber;
use App\Models\PatientTreatment;
use App\Models\Treatment;
use App\Models\TreatmentMedicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriberController extends Controller
{
    public function storeApnToken(Request $request)
    {
        $prescriber = Prescriber::find(Auth::guard("webPresc")->id());

        $apnToken = $request->input('apn_token');

        $prescriber->update(['apn_token' => $apnToken]);

        return response()->json(['message' => 'APN token stored successfully']);
    }

    public function desativate($id)
    {
        $prescriber = Prescriber::find($id);

        try {
            $prescriber->update([
                'active' => false
            ]);

            return response()->json(new SuccessResource('Prescriber desativado com sucesso.'), 422);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }
    public function delete($id)
    {
        $prescriber = Prescriber::find($id);

        try {
            $prescriber->delete();

            return response()->json(new SuccessResource('Conta deletada com sucesso.'), 422);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);

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

    protected function getPrescribersWithPatients($id) {
        return Prescriber::with('patients')->where('id', $id)->get();
    }
    
    protected function formatPrescriberData($prescriber) {

        $prescriberData = [
            'id' => $prescriber->id,
            'name' => $prescriber->name,
            'email' => $prescriber->email,
            'cpf' => $prescriber->cpf,
            'cellphone' => $prescriber->cellphone,
            'crm' => $prescriber->crm,
            'cnpj' => $prescriber->cnpj,
            'company_name' => $prescriber->company_name,
            'patients' => []
        ];
    
        foreach ($prescriber->patients as $patient) {

            $patientData = [
                'id' => $patient->id,
                'name' => $patient->name,
                'email' => $patient->email,
                'cpf' => $patient->cpf,
                'cellphone' => $patient->cellphone,
                'birth' => $patient->birth,
                'active' => $patient->active,
                'treatment' => []
            ];

            foreach ($patient->newTreatments as $treatment) {

                $treatmentData = [
                    'id' => $treatment->id,
                    'name_diagnosis' => $treatment->name_diagnosis,
                    'name_medicine' => $treatment->name_medicine,
                    'name_treatment' => $treatment->name_treatment,
                    'how_many' => $treatment->how_many,
                    'frequency' => $treatment->frequency,
                    'presentation' => $treatment->presentation,
                    'start_treatment_date' => $treatment->start_treatment_date,
                    'end_treatment_date' => $treatment->end_treatment_date,
                    'use_time' => $treatment->use_time,
                    'posology' => $treatment->posology,
                    'packing_quantity' => $treatment->packing_quantity,
                    'permanent' => $treatment->permanent,
                ];

                $patientData['treatment'][] = $treatmentData;

            }

            $prescriberData['patients'][] = $patientData;

        }
    
        return $prescriberData;
    }
    
    protected function buildPrescribersData($prescribers) {
        $prescribersData = [];
    
        foreach ($prescribers as $prescriber) {
            $prescriberData = $this->formatPrescriberData($prescriber);
            $prescribersData[] = $prescriberData;
        }
    
        return $prescribersData;
    }
    

    public function getPrescriberPatientsWithTreatments(Request $request)
    {
        try {
            
            $patient = Prescriber::with('patients.treatments.treatmentsRef.medicine')->with('patients.treatments.diagnose')->findOrFail($request->id_prescriber);

            return response()->json(new SuccessResource($patient), 200);

        } catch (\Throwable $th) {
            
            return response()->json(new ErrorResource('Paciente não encontrado'), 422);

        }
        
    }
}
