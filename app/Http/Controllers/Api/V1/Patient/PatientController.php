<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\DefaultUserResource;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\PatientTreatment;
use App\Models\TreatmentMedicine;
use App\Notifications\SendPasswordToCreatedPatientFromPrescriber;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function desativate($id)
    {
        $patient = Patient::find($id);

        try {
            $patient->update([
                'active' => false
            ]);

            return response()->json(new SuccessResource('Patient desativado com sucesso.'), 422);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }
    public function delete($id)
    {
        $patient = Patient::find($id);

        try {
            $patient->delete();

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

    public function updateAccountConfig($id, Request $request)
    {
        $patient = Patient::find($id);

        try {
            $patient->update([
                'push_notification' => $request->push_notification,
                'email_notification' => $request->email_notification,
                'remember_medicine' => $request->remember_medicine,
                'treatment_feedback' => $request->treatment_feedback
            ]);

            return response()->json(new SuccessResource('Configuracoes da conta alteradas com sucesso!.'), 422);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function createPatientUsingPrescriber(Request $request)
    {
        try {
            $request->merge([
                'active' => true,
            ]);

            $newPassword = $this->generatePassword();
            $request['password'] = bcrypt($newPassword);

            $user = Patient::create($request->all());

            $user->notify(new SendPasswordToCreatedPatientFromPrescriber($newPassword, $user->email));

            $token = $user->createToken('main')->plainTextToken;

            $user = new DefaultUserResource($user);


            return response(compact('user', 'token'));

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nao foi possivel criar o paciente'), 422);

        }
    }

    public function connectPrescriberToPatient(Request $request)
    {
        $patient = Patient::find($request->patient_id);
        try {
            $patient->update([
                'prescriber_id' => $request->prescriber_id
            ]);

            return response()->json(new SuccessResource('Sucesso!.'), 422);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nao foi possivel criar o paciente'), 422);

        }
           
    }

    public function errasePrescriberInPatient($id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return response()->json(new ErrorResource('Paciente não encontrado'), 422);
        }

        if (!$patient->prescriber_id) {
            return response()->json(new ErrorResource('Paciente não esta vinculado a nenhum prescritor'), 422);
        }

        $patient->prescriber_id = null;
        $patient->save();

        // Return a success response
        return response()->json(new SuccessResource('Sucesso!'), 422);
    }

    public function getPacientTreatment($id)
    {

        try {
            
        $patient = Patient::with('newTreatments')->findOrFail($id);

        $response = [
            'id' => $patient->id,
            'name' => $patient->name,
            'email' => $patient->email,
            'cpf' => $patient->cpf,
            'cellphone' => $patient->cellphone,
            'birth' => $patient->birth,
            'active' => $patient->active,
            'treatments' => $patient->newTreatments->toArray(),
        ];

        return response()->json($response);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Paciente não encontrado'), 422);

        }
        
    }

    

    protected function generatePassword()
    {
        return bin2hex(random_bytes(8)); 
    }

}
