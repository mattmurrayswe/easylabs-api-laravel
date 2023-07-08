<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
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

            $dataTreatment = [
                "patient_id" => $request->patient_id,
                "prescriber_id" => $request->prescriber_id,
                "diagnoses_id" => $request->diagnoses_id
            ];

            $treatment = TreatmentsRef::create($dataTreatment);

            foreach ($request->medicines as $medicine) {

                $dataMedicine = [
                    "treatment_id" => $treatment->id,
                    "medicine_id" => $medicine->medicine_id,
                    "intervalo_em_horas" => $medicine->intervalo_em_horas,
                    "inicio_do_uso" => $medicine->inicio_do_uso,
                    "how_many" => $medicine->how_many
                ];
                
                $treatment = TreatmentHasMedicines::create($dataMedicine);
            }

            return response()->json(new SuccessResource("Tratamento criado com sucesso!"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }
        
    }

    public function getAllTreatment()
    {
        try {
            
            $treament = $this->treatmentService->getAllTreament();

            return response()->json(new SuccessResource($treament), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }
    }
    public function getTreatment($id)
    {
        try {
            $treatment = $this->treatmentService->getTreatment($id);
            return response()->json(new SuccessResource($treatment), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }
    public function deleteTreatment($id)
    {
        try {
            $treatment = $this->treatmentService->deleteTreatment($id);
            return response()->json(new SuccessResource($treatment), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }

    public function editTreatment(StoreTreatmentRequest $request, $id)
    {
        try {
            
            $treament = $this->treatmentService->edit($request, $id);

            return response()->json(new SuccessResource($treament), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }

    }
}
