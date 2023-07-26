<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\PatientSymptoms;
use App\Models\Symptoms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SymptomsController extends Controller
{

    public function informSymptoms(Request $request)
    {
        try {
            PatientSymptoms::create($request->all());
            return response()->json(new SuccessResource("Sintoma informado com sucesso!"), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Erro ao informar sintoma!"), 422);
        }
    }

    public function informedSymptomEdit(Request $request)
    {
        try {

            PatientSymptoms::whereId($request['informed_symptom_id'])->update(
                [
                    "symptom_scale" => $request['symptom_scale'],
                    "diagnoses_id" => $request['diagnoses_id'],
                    "symptom_id" => $request['symptom_id'],
                    "description" => $request['description'],
                ]
            );

            return response()->json(new SuccessResource("Sintoma informado editado com sucesso!"), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource("Erro ao informar sintoma!"), 422);
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
                where('patient_id', Auth::id())->
                where('symptom_id', $request['symptom_id'])->
                where('diagnoses_id', $request['diagnoses_id'])->get()->toArray();

            return response()->json(new SuccessResource($symptoms), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($symptoms), 404);

        }
    }

    public function informedSymptomsCount(Request $request)
    {
        try {

            $symptoms = PatientSymptoms::
                where('created_at', '>', $request['start_time'])->
                where('created_at', '<', $request['end_time'])->
                where('patient_id', Auth::id())->get()->toArray();

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
