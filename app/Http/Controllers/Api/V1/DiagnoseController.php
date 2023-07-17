<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Diagnoses;
use App\Models\DiagnosesHasSuggestedMedicines;
use App\Models\DiagnosesHasSymptoms;
use App\Models\Medicine;
use App\Models\TreatmentsRef;
use App\Models\TreatmentHasMedicines;
use App\Service\TreatmentService;
use Exception;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{

    /**
     * The error message.
     *
     * @var string
     */
    protected $errorMessage;

    /**
     * @var TreatmentService
     */
    private TreatmentService $treatmentService;

    public function __construct(TreatmentService $treatmentService)
    {
        $this->treatmentService = $treatmentService;
        $this->errorMessage = "Tratamento nao encontrado!";
    }

    public function store(Request $request)
    {
        try {

            $dataDiagnose = [
                "name" => $request->name
            ];

            $diagnose = Diagnoses::create($dataDiagnose);

            foreach ($request->has_symptoms as $symptom) {

                $dataDiagHasSymptoms = [
                    "diagnose_id" => $diagnose->id,
                    "symptom_id" => $symptom["symptom_id"]
                ];

                DiagnosesHasSymptoms::create($dataDiagHasSymptoms);
            }

            foreach ($request->has_suggested_medicines as $medicines) {

                $dataDiagHasSugMedicines = [
                    "diagnose_id" => $diagnose->id,
                    "medicine_id" => $medicines["medicine_id"]
                ];

                DiagnosesHasSuggestedMedicines::create($dataDiagHasSugMedicines);
            }

            return response()->json(new SuccessResource([
                "message" => "Diagnóstico criado com sucesso!",
                "diagnose_id" => $diagnose->id
            ]), 200);
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function getAllDiagnoses()
    {
        try {

            $diagnoses = Diagnoses::all();

            return response()->json(new SuccessResource($diagnoses), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
    }

    public function getDiagnose($id)
    {
        try {

            $diagnoses = Diagnoses::where("id", $id)->with("hasSymptoms.symptom")->get()->toArray();

            return response()->json(new SuccessResource($diagnoses), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 404);
        }
    }

    public function deleteDiagnose($id)
    {
        try {
            Diagnoses::where('id', $id)->delete();

            return response()->json(new SuccessResource("Diagnostico excluido com sucesso!"), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }

    public function editDiagnose(Request $request, $id)
    {
        try {

            if (isset($request->sintomas_ids)) {

                DiagnosesHasSymptoms::where("diagnose_id", $id)->delete();
                
            }

            if (isset($request->medicamentos_ids)) {

                DiagnosesHasSuggestedMedicines::where("diagnose_id", $id)->delete();

            }

            foreach ($request->sintomas_ids as $idSintoma) {

                $dataDiagHasSymptoms = [
                    "diagnose_id" => $id,
                    "symptom_id" => $idSintoma
                ];

                DiagnosesHasSymptoms::create($dataDiagHasSymptoms);
            }

            foreach ($request->medicamentos_ids as $idMedicamento) {

                $dataDiagHasSugMedicines = [
                    "diagnose_id" => $id,
                    "medicine_id" => $idMedicamento
                ];

                DiagnosesHasSuggestedMedicines::create($dataDiagHasSugMedicines);
            }
            

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }
}
