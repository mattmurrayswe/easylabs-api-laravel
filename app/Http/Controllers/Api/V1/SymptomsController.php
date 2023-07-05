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

            $return = PatientSymptoms::whereId($request['informed_symptom_id'])->update(
                [
                    "symptom_scale" => $request['symptom_scale'],
                    "diagnoses_id" => $request['diagnoses_id'],
                    "symptom_id" => $request['symptom_id']
                ]
            );

            return response()->json(new SuccessResource("Sintoma informado editado com sucesso!"), 200);

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
}
