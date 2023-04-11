<?php

namespace App\Http\Requests\Api\V1\Treatment;

use Illuminate\Foundation\Http\FormRequest;

class StoreTreatmentRequest extends FormRequest
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
            'description' => ['nullable'],
            'timer_per_day' => ['nullable'],
            'duration' => ['nullable'],
            'how_many' => ['nullable'],
            'frequency' => ['nullable'],
            'medicine' => ['nullable'],
            'start_treatment_date' => ['nullable'],
            'end_treatment_date' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório!',
        ];
    }
}
