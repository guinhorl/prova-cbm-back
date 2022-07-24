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

    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
