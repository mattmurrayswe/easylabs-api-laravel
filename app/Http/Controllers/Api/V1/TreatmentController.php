<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
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

    public function store(StoreTreatmentRequest $request)
    {
        try {
            
            $treament = $this->treatmentService->store($request);

            return response()->json(new SuccessResource($treament), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
        
    }

    public function getAllTreatment()
    {
        try {
            
            $treament = $this->treatmentService->getAllTreament();

            return response()->json(new SuccessResource($treament), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

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
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }

    }
}
