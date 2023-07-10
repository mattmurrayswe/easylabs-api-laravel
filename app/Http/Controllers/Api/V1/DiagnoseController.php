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
            $treatment = TreatmentsRef::where('id', $id)->get()->toArray();

            $treatmentsHasMeds = TreatmentHasMedicines::where('treatment_id', $treatment[0]["id"])->get()->toArray();

            $response[] = [
                "treatment_id" => $treatment[0]["id"],
                "diagnoses_id" => $treatment[0]["diagnoses_id"],
                "medicines" => $treatmentsHasMeds
            ];

            return response()->json(new SuccessResource($response), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 404);
        }
    }
    
    public function deleteDiagnose($id)
    {
        try {
            TreatmentsRef::where('id', $id)->delete();

            return response()->json(new SuccessResource("Tratamento excluido com sucesso!"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }

    public function editDiagnose(Request $request, $id)
    {
        try {
            
            if (isset($request->diagnoses_id)) {

                TreatmentsRef::where('id', $id)->update(
                    [
                        "diagnoses_id" => $request->diagnoses_id
                    ]
                );
            }

            if (isset($request->medicines)) {

                foreach ($request->medicines as $medicine) {
    
                    TreatmentHasMedicines::where([
                        "medicine_id" => $medicine["medicine_id"],
                        "treatment_id" => $id,
                    ])->update(
                        [
                            "medicine_id" => $medicine["medicine_id"],
                            "intervalo_em_horas" => $medicine["intervalo_em_horas"],
                            "inicio_do_uso" => $medicine["inicio_do_uso"],
                            "how_many" => $medicine["how_many"]
                        ]
                    );
                }
            }

            return response()->json(new SuccessResource("Sucesso ao editar o Tratamento"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }

    }
}
