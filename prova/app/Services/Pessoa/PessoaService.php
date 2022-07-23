<?php

use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;

class PessoaService implements IPessoaService
{
    public function store(array $request)
    {
        DB::beginTransaction();
        try {
            Pessoa::create($request);
            DB::commit();
        }catch (Exception $errors){
            DB::rollBack();
            return 'Mensagem: ' .$errors->getMessage();
        }
    }

}
