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
use App\Models\Pharmacy;
use App\Models\TreatmentsRef;
use App\Models\TreatmentHasMedicines;
use App\Service\TreatmentService;
use Exception;
use Illuminate\Http\Request;

class PharmacyController extends Controller
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
            
            $dataPharmacy = [
                "cep" => $request->cep,
                "street" => $request->street,
                "number" => $request->number,
                "complement" => $request->complement,
                "neighboor" => $request->neighboor,
                "city" => $request->city,
                "state" => $request->state,
                "name" => $request->name,
                "rede" => $request->rede,
                "email" => $request->email,
            ];

            $pharmacy = Pharmacy::create($dataPharmacy);

            return response()->json(new SuccessResource([
                "message" => "Farmacia criado com sucesso!",
                "pharmacy_id" => $pharmacy->id
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

    public function editPharmacy(Request $request, $id)
    {
        try {

            Pharmacy::where("id", $id)->update([
                "cep" => $request->cep,
                "street" => $request->street,
                "number" => $request->number,
                "complement" => $request->complement,
                "neighboor" => $request->neighboor,
                "city" => $request->city,
                "state" => $request->state,
                "name" => $request->name,
                "rede" => $request->rede,
                "email" => $request->email,
            ]);

            return response()->json(new SuccessResource([
                "message" => "Farmácia editada com sucesso!"
            ]), 200);            

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }
}
