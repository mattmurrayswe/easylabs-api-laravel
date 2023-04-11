<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Medicine\StoreMedicineRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Service\MedicineService;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    /**
     * The error message.
     *
     * @var string
     */
    protected $errorMessage;

     /**
     * @var MedicineService
     */
    private MedicineService $medicineService;

    public function __construct(MedicineService $medicineService)
    {
        $this->medicineService = $medicineService;
        $this->errorMessage = "Medicamento nao encontrado!";
    }

    public function store(StoreMedicineRequest $request)
    {
        try {
            
            $medicine = $this->medicineService->newMedicine($request);
            return response()->json(new SuccessResource($medicine), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }
    }

    public function getAllMedicine()
    {
        try {
            
            $treament = $this->medicineService->getAllMedicine();

            return response()->json(new SuccessResource($treament), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);

        }
    }
    public function getMedicine($id)
    {

        try {
            $treatment = $this->medicineService->getMedicine($id);
            return response()->json(new SuccessResource($treatment), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }
    public function deleteMedicine($id)
    {

        try {
            $treatment = $this->medicineService->deleteMedicine($id);
            return response()->json(new SuccessResource($treatment), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }
    public function edit(StoreMedicineRequest $request, $id)
    {

        try {
            $medicine = $this->medicineService->edit($request, $id);
            return response()->json(new SuccessResource($medicine), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }
}
