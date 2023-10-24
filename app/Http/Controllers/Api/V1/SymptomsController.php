<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\PatientSymptoms;
use App\Models\Symptoms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SymptomsController extends Controller
{

    public function informSymptoms(Request $request)
    {
        try {
            $newInformedSymptom = PatientSymptoms::create($request->all());
            return response()->json(new SuccessResource([
                "message" => "Sintoma informado com sucesso!",
                "informed_symptom_id" => $newInformedSymptom->id,
            ]), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Erro ao informar sintoma!"), 422);
        }
    }

    public function informedSymptomEdit(Request $request)
    {
        try {
            $dataToUpdate = [];
    
            // Check if each column is present in the request and add it to the update data array if available
            if ($request->has('symptom_scale')) {
                $dataToUpdate['symptom_scale'] = $request->input('symptom_scale');
            }
    
            if ($request->has('diagnoses_id')) {
                $dataToUpdate['diagnoses_id'] = $request->input('diagnoses_id');
            }
    
            if ($request->has('symptom_id')) {
                $dataToUpdate['symptom_id'] = $request->input('symptom_id');
            }
    
            if ($request->has('description')) {
                $dataToUpdate['description'] = $request->input('description');
            }
    
            if (!empty($dataToUpdate)) {
                PatientSymptoms::whereId($request->input('informed_symptom_id'))->update($dataToUpdate);
            }
    
            return response()->json(new SuccessResource("Sintoma editado com sucesso!"), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Erro ao editar sintoma!"), 422);
        }
    }
    

    public function informedSymptomDelete(Request $request)
    {
        try {

            PatientSymptoms::whereId($request['informed_symptom_id'])->delete();

            return response()->json(new SuccessResource("Sintoma informado deletado com sucesso!"), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Erro ao informar sintoma!"), 422);
        }
    }

    public function informedSymptoms(Request $request)
    {
        try {

            $symptoms = PatientSymptoms::
                where('created_at', '>', $request['start_time'])->
                where('created_at', '<', $request['end_time'])->
                where('patient_id', Auth::guard("webPatient")->id())->
                where('diagnoses_id', $request['diagnoses_id'])->get()->toArray();

            return response()->json(new SuccessResource($symptoms), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($symptoms), 404);

        }
    }

    public function informedSymptomsLastWeek(Request $request)
    {

        try {
            $startOfWeek = Carbon::now()->subDays(6); // Calculate the start date for the last 7 days (1 week).
            $endOfWeek = Carbon::now(); // The current date is the end date.
    
            $symptoms = PatientSymptoms::
                where('created_at', '>=', $startOfWeek)->
                where('created_at', '<=', $endOfWeek)->
                where('patient_id', Auth::guard("webPatient")->id())->get()->toArray();
    
            return response()->json(new SuccessResource($symptoms), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($symptoms), 500);
        }
    }

    public function informedSymptomsLastMonth(Request $request)
    {

        try {
            $startOfWeek = Carbon::now()->subDays(29); // Calculate the start date for the last 7 days (1 week).
            $endOfWeek = Carbon::now(); // The current date is the end date.
    
            $symptoms = PatientSymptoms::
                where('created_at', '>=', $startOfWeek)->
                where('created_at', '<=', $endOfWeek)->
                where('patient_id', Auth::guard("webPatient")->id())->get()->toArray();
    
            return response()->json(new SuccessResource($symptoms), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 500);
        }
    }

    public function informedSymptomsPresc(Request $request)
    {
        try {

            $symptoms = PatientSymptoms::
                where('created_at', '>', $request['start_time'])->
                where('created_at', '<', $request['end_time'])->
                where('patient_id', $request->id_patient)->get()->toArray();

            return response()->json(new SuccessResource($symptoms), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 404);

        }
    }

    public function informedSymptomsCount(Request $request)
    {
        try {

            $symptoms = PatientSymptoms::
                where('created_at', '>', $request['start_time'])->
                where('created_at', '<', $request['end_time'])->
                where('patient_id', Auth::guard("webPatient")->id())->get()->toArray();

            return response()->json(new SuccessResource(count($symptoms)), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($symptoms), 404);

        }
    }

    public function listSymptoms()
    {
        try {

            $symptoms = Symptoms::all(
                [
                    "id",
                    "name"
                ]
            );

            return response()->json(new SuccessResource($symptoms), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($symptoms), 404);

        }
    }

    public function cadastreSymptom(Request $request)
    {
        try {

            $symptoms = Symptoms::create($request->all());

            return response()->json(new SuccessResource($symptoms), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($symptoms), 404);

        }
    }

    public function editSymptom(Request $request, $id)
    {
        try {

            Symptoms::where("id", $id)->update([
                "name" => $request->name
            ]);

            return response()->json(new SuccessResource("Sintoma editado com sucesso"), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource("Falha ao editar sintoma"), 404);

        }
    }

    public function deleteSymptom($id)
    {
        try {

            Symptoms::where("id", $id)->delete();

            return response()->json(new SuccessResource("Sintoma deletado com sucesso"), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource("Falha ao deletar sintoma"), 404);

        }
    }
}
