<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetPerfilRequest;
use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use App\Services\Pessoa\Interfaces\IPessoaService;
use App\Services\Pessoa\PessoaService;
use Exception;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;


class PessoaController extends Controller
{
   private IPessoaService $service;

    public function __construct()
    {
        $this->service = new PessoaService();
    }

    public function index()
    {
        $pessoa = Pessoa::all();
        return $pessoa;
    }

    public function store(PessoaRequest $request)
    {
        try {
            return $this->service->store($request->all());
        }catch (Exception $e){
            throw new Exception('Erro ao cadastrar a pessoa! '. $e->getMessage());
        }
    }

    /**
     * @throws Exception
     */
    public function show($id)
    {
        try {
            return $this->service->show($id);
        }catch (Exception $e){
            throw new Exception('Erro ao exibir! ' . $e->getMessage());
        }
    }

    /**
     * @throws Exception
     */
    public function update(Request $request, $id)
    {
        try {
            return $this->service->update($request->all(), $id);
        } catch (\Exception $e){
            throw new Exception('Erro na edição! ' . $e->getMessage());
        }

    }

    /**
     * @throws Exception
     */
    public function destroy(int $id)
    {
        try {
            return $this->service->destroy($id);
        }catch (\Exception $e){
            throw new Exception('Erro ao excluir perfil! ' . $e->getMessage());
        }
    }
}
