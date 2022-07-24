<?php

namespace App\Services\Pessoa;

use App\Models\Pessoa;
use App\Services\Pessoa\Interfaces\IPessoaService;
use Exception;
use Illuminate\Support\Facades\DB;


class PessoaService implements IPessoaService
{
    public function store(array $request)
    {
        DB::beginTransaction();
        try {
           $perfil = Pessoa::create($request);
            DB::commit();
            return $perfil;
        }catch (Exception $errors){
            DB::rollBack();
            return 'Mensagem: ' .$errors->getMessage();
        }
    }
}
