<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecificUserResource extends JsonResource
{
    public static $wrap = false;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'emailVerified' => $this->email_verified_at,
            'cellphone' => $this->cellphone,
            'cpf' => $this->cpf,
            'crm' => $this->crm,
            'indicateClinic' => $this->indicate_clinic,
            'cnpj' => $this->cnpj,
            'companyName' => $this->company_name,
            'address' => [
                'cep' => $this->address[0],
                'street' => $this->address[1],
                'number' => $this->address[2],
                'complement' => $this->address[3],
                'district' => $this->address[4],
                'city' => $this->address[5],
                'state' => $this->address[6],
            ],
            'documents' => [
                'documentFront' => $this->documents[0],
                'documentBack' => $this->documents[1],
                'documentSelfie' => $this->documents[2],
                'profile' => $this->documents[3],
            ],
            'createdAt' => $this->created_at->format('d-m-Y')
        ];
    }
}
