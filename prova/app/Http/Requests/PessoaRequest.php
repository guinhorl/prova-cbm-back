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
            'cpf' => 'required|int',
            'nome' => 'required|max:100',
            'data_nascimento' => 'required|string',
            'email' => 'required|email',
            'formacao' => 'required|array',
            'experiencia' => 'required|array',
            'competencia' => 'required|array',
            'telefone' => 'required|max:15',
            'resumo' => 'required|max:500'
        ];
    }
}
