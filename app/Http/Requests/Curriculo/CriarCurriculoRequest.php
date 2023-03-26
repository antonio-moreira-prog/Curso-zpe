<?php

namespace App\Http\Requests\Curriculo;

use Illuminate\Foundation\Http\FormRequest;

class CriarCurriculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//auth() -> check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:100|min:2|string',
            'last_name' => 'required|max:100|min:2|string',
            'email' => 'required|unique:curriculos|email',
            'confirmado' => 'required|boolean'
        ];
    }
    public function messages()
    {
        return[
            'first_name.required' => 'Preencha o primeiro nome',
            'first_name.max' => 'Preencha com no máximo 100 caracteres',
            'first_name.min' => 'Preencha com no minimo 2 caracteres',
            'first_name.string' => 'Preencha com o valor válido',

            //Last
            'last_name.required' => 'Preencha com seu sobrenome',
            'last_name.max' => 'Preencha com no máximo 100 caracteres',
            'last_name.min' => 'Preencha com no minimo 2 caracteres',
            'last_name.string' => 'Preencha com o valor válido',

            //email
            'email.required' => 'Preencha com seu email',
            'email.unique' => 'Este email já está sendo usado',
            'email.email' => 'Preencha com o valor válido',

            //confirmado
            'confirmado.required' => 'Preencha o campo confirmado',
            'confirmado.boolean' => 'Preencha com o valor válido'
        ];
    }
}
