<?php

namespace App\Services\Formacao;

use App\Models\Formacao;
use App\Services\Formacao\Interfaces\IFormacaoService;
use Exception;
use Illuminate\Support\Facades\DB;

class FormacaoService implements IFormacaoService
{
    public function vincularFormacao(array $data)
    {
        DB::beginTransaction();
        try {
            Formacao::create($data);
            DB::commit();
        } catch (Exception $erro) {
            DB::rollBack();
            return 'Erro no vincularFormacao(): ' . $erro->getMessage();
        }
    }
}
