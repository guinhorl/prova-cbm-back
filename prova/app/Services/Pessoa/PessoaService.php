<?php

namespace App\Services\Pessoa;

use App\Models\Pessoa;
use App\Services\Experiencia\ExperienciaService;
use App\Services\Formacao\FormacaoService;
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

            $formacoes = $this->mapearIdPerfil($perfil->id, $request['formacao']);
            $formacao = (new FormacaoService());
            $formacao->vincularFormacao($formacoes);

            $experiencias = $this->mapearIdPerfil($perfil->id, $request['experiencia']);
            $experiencia = (new ExperienciaService());
            $experiencia->vincularExperiencia($experiencias);

            DB::commit();
            return $perfil;
        } catch (Exception $errors) {
            DB::rollBack();
            return 'Mensagem: ' . $errors->getMessage();
        }
    }

    public function show(int $id)
    {
        $perfil = Pessoa::find($id);
        return $perfil;
    }

    public function destroy(int $id)
    {
        Pessoa::destroy($id);
    }


    private function mapearIdPerfil($id, $tipo)
    {
        $aux = array();
        foreach ($tipo as $t){
            $t['perfil_id'] = $id;
            $aux[] = $t;
        }
        return $aux;
    }
}
