<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class EditPatientRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:patients,email'],
            'password' => ['required', 'min:6','confirmed'],
            'cellphone' => ['required', 'string'],
            'cpf' => ['required', 'string', 'max:11', 'unique:patients,cpf'],
            'birth' => ['date_format:Y-m-d','before:today','required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório!',
            'email.required' => 'O campo Email é obrigatório!',
            'password.required' => 'O campo Senha é obrigatório!',
            'cellphone.required' => 'O campo Celular é obrigatório!',
            'cpf.required' => 'O campo CPF é obrigatório!',
            'birth.required' => 'O campo Data de Nascimento é obrigatório!',
            'password_confirmation.required' => 'O campo Confirmação de senha é obrigatório!',
            'cpf.unique' => 'CPF ja cadastrado em nossa base',
            'email.unique' => 'Email ja cadastrado em nossa base!',
            'password.Password' => 'fewfwefwe',
            'password.confirmed' => 'As duas senhas não são iguais',
            'password.min' => 'Senha deve ter no mínimo 6 caracteres!',
        ];
    }
}
