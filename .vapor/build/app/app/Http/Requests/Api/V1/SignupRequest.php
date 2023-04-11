<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(8)->letters()->symbols()],
            'cpf' => ['required', 'string', 'max:11', 'unique:users,cpf'],
            'cellphone' => ['required', 'string'],
            'crm' => ['required', 'string', 'unique:users,crm'],
            'indicate_clinic' => ['required', 'boolean'],
            'cnpj' => ['required', 'string', 'unique:users,cnpj'],
            'company_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'array', 'max:7'],
            'address.*' => ['string'],
            'documents' => ['required', 'array', 'max:4'],
            'documents.*' => ['string']
        ];
    }
}
