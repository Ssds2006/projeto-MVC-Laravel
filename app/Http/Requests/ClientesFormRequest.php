<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome'=>['required','min:3'],
            'cpf'=>['required','max:11'],
            'telefone'=>['required','max:11']
        ];
    }

    public function messages()
    {
        return [
            'nome.*'=> 'O campo NOME é obrigatório e precisa de no minimo 3 caracteres',
            'cpf.*'=> 'O campo CPF é obrigatório e precisa de no máximo de 11 caracteres',
            'telefone.*'=> 'O campo TELEFONE é obrigatório e precisa de no máximo de 11 caracteres',

        ];
    }
}
