<?php

namespace App\Http\Requests\Api\V1\Treatment;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewTreatmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'patient_id' => ['required'],
            'name_diagnosis' => ['required'],
            'name_medicine' => ['required'],
            'name_treatment' => ['required'],
            'how_many' => ['required'],
            'frequency' => ['required'],
            'presentation' => ['required'],
            'start_treatment_date' => ['required'],
            'end_treatment_date' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'id_patient.required' => 'O campo id_paciente é obrigatório!',
            'name_diagnosis.required' => 'O campo Nome do Diagnostico é obrigatório!',
            'name_medicine.required' => 'O campo Nome do Medicamento é obrigatório!',
            'name_treatment.required' => 'O campo Nome do Tratamento é obrigatório!',
            'how_many.required' => 'O campo Quantidade é obrigatório!',
            'frequency.required' => 'O campo Frequencia é obrigatório!',
            'presentation.required' => 'O campo Apresentacao é obrigatório!',
            'start_treatment_date.required' => 'O campo Data de inicio do tratamento é obrigatório!',
            'end_treatment_date.required' => 'O campo Data de finalizacao do tratamento e obrigatorio é obrigatório!',
        ];
    }
}
