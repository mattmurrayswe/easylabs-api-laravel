<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Medicine\StoreMedicineRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\MedicineReminder;
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

    public function storeReminder(Request $request)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'medicine_id' => 'required|exists:medicines,id',
            'reminder_time' => 'required|date_format:H:i:s',
        ]);

        $reminder = MedicineReminder::create($validatedData);

        return response()->json(new SuccessResource($reminder), 200);
    }

    public function indexReminder(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|integer|exists:patients,id',
        ]);

        $patient_id = $request->input('patient_id');
        
        $reminders = MedicineReminder::where('patient_id', $patient_id)->with('medicine')->get();
        
        return response()->json(new SuccessResource($reminders), 200);
    }

    public function showReminder($id)
    {
        $reminder = MedicineReminder::where('id', $id)->get();

        return response()->json(new SuccessResource($reminder), 200);
    }

    public function updateReminder(Request $request, $id)
    {
        $validatedData = $request->validate([
            'reminder_time' => 'sometimes|required|date_format:H:i:s',
        ]);
    
        $reminder = MedicineReminder::find($id);
    
        if (!$reminder) {
            return response()->json(['message' => 'Reminder not found'], 404);
        }
    
        $reminder->update($validatedData);
    
        return response()->json(new SuccessResource($reminder), 200);
    }

    public function destroyReminder($id)
    {
        $reminder = MedicineReminder::find($id);
    
        if (!$reminder) {
            return response()->json(['message' => 'Reminder not found'], 404);
        }

        $reminder->delete();

        return response()->json(['message' => 'Reminder destruído com sucesso'], 200);
    }

    public function store(StoreMedicineRequest $request)
    {
        try {
            
            $medicine = $this->medicineService->newMedicine($request);
            return response()->json(new SuccessResource($medicine), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

    public function getAllMedicine()
    {
        try {

            $treament = $this->medicineService->getAllMedicine();

            return response()->json(new SuccessResource($treament), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

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
