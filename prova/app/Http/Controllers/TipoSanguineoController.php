<?php

namespace App\Http\Controllers;

use App\Models\TipoSanguineo;
use Illuminate\Http\Request;

class TipoSanguineoController extends Controller
{

    /**
     * Lista de Tipos Sanguineos.
     * @OA\Get (
     *     path="/api/v0/tipo-sanguineos/",
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
     *                         example="Tipo Sanguineo"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $tipos = TipoSanguineo::all();
        return $tipos;
    }
}
