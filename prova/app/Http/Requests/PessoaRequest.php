<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cpf' => 'required',
            'nome' => 'required',
            'data_nascimento' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'resumo' => 'required'
        ];
    }
}
