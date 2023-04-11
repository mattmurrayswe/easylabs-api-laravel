<?php

namespace App\Http\Requests\Api\V1\Medicine;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicineRequest extends FormRequest
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
            'name' => ['required'],
            'presentation' => ['required'],
            'concentration' => ['nullable'],
            'volume_flask' => ['nullable'],
            'formulation' => ['nullable'],
            'lab' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório!',
            'presentation.required' => 'O campo Apresentacao é obrigatório!',
            'lab.required' => 'O campo Laboratorio é obrigatório!',
        ];
    }
}
