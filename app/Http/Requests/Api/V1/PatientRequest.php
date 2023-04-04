<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class PatientRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:55'],
            'email' => ['required', 'email', 'unique:patients,email'],
            'password' => ['required', Password::min(6)->letters()->symbols(),'confirmed'],
            'cellphone' => ['required', 'string'],
            'cpf' => ['required', 'string', 'max:11', 'unique:patients,cpf'],
            'cellphone' => ['required', 'string'],
            'birth' => ['date_format:Y-m-d','before:today','nullable'],
        ];
    }
}
