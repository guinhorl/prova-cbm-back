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

    /**
     * Lista todos os perfis cadastrados.
     * @OA\Get (
     *     path="/api/v0/perfis/",
     *     tags={"Index"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="tipos_sanguineo_id",
     *                         type="number",
     *                         example="2"
     *                     ),
     *                     @OA\Property(
     *                         property="signo_id",
     *                         type="number",
     *                         example="3"
     *                     ),
     *                     @OA\Property(
     *                         property="cpf",
     *                         type="number",
     *                         example="12345678912"
     *                     ),
     *                     @OA\Property(
     *                         property="nome",
     *                         type="string",
     *                         example="Wagner Ramos Lima"
     *                     ),
     *                     @OA\Property(
     *                         property="email",
     *                         type="string",
     *                         example="wagner@yahoo.com.br"
     *                     ),
     *                     @OA\Property(
     *                         property="telefone",
     *                         type="string",
     *                         example="79999590102"
     *                     ),
     *                     @OA\Property(
     *                         property="resumo",
     *                         type="string",
     *                         example="Exemplo de texto para resumo."
     *                     ),
     *                     @OA\Property(
     *                         property="data_nascimento",
     *                         type="string",
     *                         example="1986-06-14"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
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
     * Pega um perfil específico
     * @OA\Get (
     *     path="/api/v0/perfis/{id}",
     *     tags={"Index"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="tipos_sanguineo_id", type="number", example="2"),
     *              @OA\Property(property="signo_id", type="number", example="3"),
     *              @OA\Property(property="cpf", type="string", example="content"),
     *              @OA\Property(property="nome", type="string", example="Wagner Ramos Lima"),
     *              @OA\Property(property="email", type="string", example="wagner@yahoo.com.br"),
     *              @OA\Property(property="telefone", type="string", example="79999590102"),
     *              @OA\Property(property="resumo", type="string", example="Exemplo de texto para resumo."),
     *              @OA\Property(property="data_nascimento", type="string", example="1986-06-14"),
     *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
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
     * Delete um perfil
     * @OA\Delete (
     *     path="/api/v0/perfis/{id}",
     *     tags={"Index"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="Deletadp com sucesso")
     *         )
     *     )
     * )
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
