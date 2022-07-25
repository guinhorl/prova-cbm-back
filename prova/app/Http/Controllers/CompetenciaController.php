<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{

    /**
     * Lista de Competencias.
     * @OA\Get (
     *     path="/api/v0/competencias/",
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
     *                         property="nome",
     *                         type="string",
     *                         example="palavra"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $competencias = Competencia::all();
        return $competencias;
    }
}
