<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Medicine;
use App\Models\TreatmentsRef;
use App\Models\TreatmentHasMedicines;
use App\Service\TreatmentService;
use Illuminate\Http\Request;

class TreatmentController extends Controller
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

            $createdBy = $request->getRequestUri() === "/api/prescriber/treatment" ? "Prescriber" : "Patient";

            $dataTreatment = [
                "patient_id" => $request->patient_id,
                "prescriber_id" => $request->prescriber_id,
                "diagnoses_id" => $request->diagnoses_id,
                "created_by" => $createdBy,
            ];

            $treatment = TreatmentsRef::create($dataTreatment);

            foreach ($request->medicines as $medicine) {

                $dataMedicine = [
                    "treatment_id" => $treatment->id,
                    "medicine_id" => $medicine["medicine_id"],
                    "intervalo_em_horas" => $medicine["intervalo_em_horas"],
                    "inicio_do_uso" => $medicine["inicio_do_uso"],
                    "fim_do_uso" => $medicine["fim_do_uso"],
                    "how_many" => $medicine["how_many"],
                    "presentation" => $medicine["presentation"]
                ];
                
                TreatmentHasMedicines::create($dataMedicine);
            }

            return response()->json(new SuccessResource([
                "message" => "Tratamento criado com sucesso!",
                "treatment_id" => $treatment->id
            ]), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
        
    }

    public function getAllTreatments(Request $request)
    {
        try {

            $treatments = TreatmentsRef::where('patient_id', $request->patient_id)->get();

            foreach ($treatments as $treatment) {
                
                $treatmentsHasMeds = TreatmentHasMedicines::where('treatment_id', $treatment->id)->with("medicine")->get()->toArray();

                $response[] = [
                    "treatment_id" => $treatment->id,
                    "diagnoses_id" => $treatment->diagnoses_id,
                    "created_by" => $treatment->created_by,
                    "medicines" => $treatmentsHasMeds
                ];
            }

            if (!$response) {
                $response = [];
            }

            return response()->json(new SuccessResource($response), 200);
            
        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
            

        }
    }

    public function getTreatment($id)
    {
        try {
            $treatment = TreatmentsRef::where('id', $id)->get()->toArray();

            $treatmentsHasMeds = TreatmentHasMedicines::where('treatment_id', $treatment[0]["id"])->get()->toArray();

            $response[] = [
                "treatment_id" => $treatment[0]["id"],
                "diagnoses_id" => $treatment[0]["diagnoses_id"],
                "created_by" => $treatment[0]["created_by"],
                "medicines" => $treatmentsHasMeds
            ];

            return response()->json(new SuccessResource($response), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 404);
        }
    }
    
    public function deleteTreatment($id)
    {
        try {
            TreatmentsRef::where('id', $id)->delete();

            return response()->json(new SuccessResource("Tratamento excluido com sucesso!"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }

    public function editTreatment(Request $request, $id)
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

                    if (isset($medicine["intervalo_em_horas"])) {
                        $dataToUpdate["intervalo_em_horas"] = $medicine["intervalo_em_horas"];
                    } 
                    if (isset($medicine["inicio_do_uso"])) {
                        $dataToUpdate["inicio_do_uso"] = $medicine["inicio_do_uso"];
                    } 
                    if (isset($medicine["fim_do_uso"])) {
                        $dataToUpdate["fim_do_uso"] = $medicine["fim_do_uso"];
                    } 
                    if (isset($medicine["how_many"])) {
                        $dataToUpdate["how_many"] = $medicine["how_many"];
                    } 
                    if (isset($medicine["presentation"])) {
                        $dataToUpdate["presentation"] = $medicine["presentation"];
                    } 
            
                    TreatmentHasMedicines::where([
                        'medicine_id' => $medicine['medicine_id'],
                        'treatment_id' => $id,
                    ])->update($dataToUpdate);

                    $dataToUpdate = [];
                }
            }

            return response()->json(new SuccessResource("Sucesso ao editar o Tratamento"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }
}
