<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\DefaultUserResource;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\PatientTreatment;
use App\Models\TreatmentHasMedicines;
use App\Models\TreatmentMedicine;
use App\Models\TreatmentsRef;
use App\Notifications\SendPasswordToCreatedPatientFromPrescriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function storeApnToken(Request $request)
    {
        $request->validate(["apn_token"=> "required|string"]);

        $patient = Patient::find(Auth::guard("webPatient")->id());

        $apnToken = $request->input('apn_token');

        $patient->update(['apn_token' => $apnToken]);

        return response()->json(['message' => 'APN token stored successfully']);
    }

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
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

    public function findPatientByCpf(Request $request)
    {
        try {
            
            $formattedCPF = substr($request->cpf, 0, 3) . '.' . substr($request->cpf, 3, 3) . '.' . substr($request->cpf, 6, 3) . '-' . substr($request->cpf, 9, 2);

            $patient = Patient::with('cuidador')->with('treatments.treatmentsRef.medicine')->with('treatments.diagnose')->where("cpf", $formattedCPF)->get();

            if($patient->count() === 0) {
                return response()->json(new ErrorResource('Nao foi encontrado nenhum paciente com esse CPF'), 422);
            }     

            return response()->json(new SuccessResource($patient), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Verifique os dados de Request'), 422);
        }
           
    }

    public function connectPrescriberToPatient(Request $request)
    {
        $patient = Patient::find($request->patient_id);
        
        try {

            $patient->update([
                'prescriber_id' => $request->prescriber_id
            ]);

            return response()->json(new SuccessResource('Sucesso!.'), 200);

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
        return response()->json(new SuccessResource('Sucesso!'), 200);
    }

    public function treatmentWithPatient(Request $request)
    {

        try {
            
            $patient = Patient::with('treatments.treatmentsRef.medicine')->with('treatments.diagnose')->with('cuidador')->findOrFail($request->id_patient);

            return response()->json(new SuccessResource($patient), 200);

        } catch (\Throwable $th) {
            
            return response()->json(new ErrorResource('Paciente não encontrado'), 422);

        }
        
    }

    protected function generatePassword()
    {
        return bin2hex(random_bytes(8)); 
    }

}
