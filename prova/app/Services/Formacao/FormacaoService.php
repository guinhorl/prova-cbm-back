<?php

namespace App\Services\Formacao;

use App\Models\Formacao;
use App\Services\Formacao\Interfaces\IFormacaoService;
use Exception;

class FormacaoService implements IFormacaoService
{
    public function vincularFormacao(array $formacoes)
    {
        try {
            $da_formacao = (new Formacao());
            foreach ($formacoes as $formacao){
                $da_formacao->nome = $formacao['nome'];
                $da_formacao->perfil_id = $formacao['perfil_id'];
                $da_formacao->instituicao_id = $formacao['instituicao_id'];
                $da_formacao->save();
            }
        } catch (Exception $erro) {
            return 'Erro no vincularFormacao(): ' . $erro->getMessage();
        }
    }
}
