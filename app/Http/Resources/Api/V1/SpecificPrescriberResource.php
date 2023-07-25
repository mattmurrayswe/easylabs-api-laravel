<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecificPrescriberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'especialidade' => $this->especialidade,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'address' => $this->address,
            'documents' => $this->documents,
            'indicate_clinic' => $this->indicate_clinic,
            'cellphone' => $this->cellphone,
            'crm' => $this->crm,
            'cnpj' => $this->cnpj,
            'company_name' => $this->company_name,
            'active' => $this->active,
        ];
    }
}
