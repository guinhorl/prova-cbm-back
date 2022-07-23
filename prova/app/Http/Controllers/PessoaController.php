<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;
use IPessoaService;
use OpenApi\Annotations as OA;
use PessoaService;

class PessoaController extends Controller
{
    private IPessoaService $service;

    public function __construct()
    {
        $this->service = new PessoaService();
    }

    public function index()
    {
//        $pessoa = Pessoa::all();
//
//        return view('index', ['enderecos' => $pessoa]);
        return response()->json('ok');
    }

    /**
     * @param PessoaRequest $request
     * @return string|void
     * @throws Exception
     */
    public function store(PessoaRequest $request)
    {
        try {
            dd($request);
            return $this->service->store($request->all());
        }catch (Exception $e){
            throw new Exception('Erro ao cadastrar a pessoa! '. $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
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
