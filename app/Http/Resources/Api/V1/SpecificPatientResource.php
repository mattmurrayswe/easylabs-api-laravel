<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecificPatientResource extends JsonResource
{
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
            'cpf' => $this->cpf,
            'cellphone' => $this->cellphone,
            'active' => $this->active,
            'birth' => $this->birth,
            'push_notification' => $this->push_notification ?? false,
            'email_notification' => $this->email_notification ?? false,
            'remember_medicine' => $this->remember_medicine ?? false,
            'treatment_feedback' => $this->treatment_feedback ?? false,
        ];
    }
}
