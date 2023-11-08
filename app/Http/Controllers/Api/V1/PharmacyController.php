<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Pharmacy;
use App\Service\TreatmentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            
            if ($request->hasFile('foto')) {

                $file = $request->file('foto');
                $uniqueId = Str::uuid();
                $path = "docs/pharmacies/{$uniqueId}.jpg";
                $fileContents = file_get_contents($file->getPathname());
                Storage::disk('s3')->put($path, $fileContents, 'public');
                $foto = Storage::disk('s3')->url($path);
            }

            $dataPharmacy = [
                "rede" => $request->rede,
                "unidade" => $request->unidade,
                "cnpj" => $request->cnpj,
                "cellphone" => $request->cellphone,
                "email" => $request->email,
                "cep" => $request->cep,
                "street" => $request->street,
                "number" => $request->number,
                "complement" => $request->complement,
                "neighboor" => $request->neighboor,
                "city" => $request->city,
                "state" => $request->state,
                "cpf" => $request->cpf,
                "name" => $request->name,
                "foto" => $foto
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

    public function deletePharmacy($id)
    {
        try {
            Pharmacy::where('id', $id)->delete();

            return response()->json(new SuccessResource("Diagnostico excluido com sucesso!"), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($this->errorMessage), 404);
        }
    }

    public function getAllPharmacies()
    {
        $pharmacies = Pharmacy::get();

        return response()->json(new SuccessResource([
            "pharmacies" => $pharmacies
        ]), 200);
    }

    public function editPharmacy(Request $request, $id)
    {
        try {
            $updateData = [];
            $fieldsToUpdate = [
                "rede",
                "unidade",
                "cnpj",
                "cellphone",
                "email",
                "cep",
                "street",
                "number",
                "complement",
                "neighboor",
                "city",
                "state",
                "cpf",
                "name",
                "foto"
            ];
    
            // Check if the field exists in the request and is not null or empty
            foreach ($fieldsToUpdate as $field) {
                if (($request->has($field) && $request->filled($field)) || $request->hasFile($field)) {
                    // Handle the foto upload to S3
                    if ($field === 'foto' && $request->hasFile('foto')) {
                        $file = $request->file('foto');
                        $uniqueId = Str::uuid();
                        $path = "docs/pharmacies/{$uniqueId}.jpg";
                        $fileContents = file_get_contents($file->getPathname());
                        Storage::disk('s3')->put($path, $fileContents, 'public');
                        $foto = Storage::disk('s3')->url($path);
                        $updateData[$field] = $foto; // Store the S3 path in your data
                    } else {
                        $updateData[$field] = $request->input($field);
                    }
                }
            }
    
            if (empty($updateData)) {
                return response()->json(new ErrorResource("Nenhum campo foi informado para atualizar."), 422);
            }
    
            Pharmacy::where("id", $id)->update($updateData);
    
            return response()->json(new SuccessResource([
                "message" => "Farmácia editada com sucesso!"
            ]), 200);
    
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }
}
