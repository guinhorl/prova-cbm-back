<?php

namespace App\Http\Controllers;

use App\Models\Signo;
use Illuminate\Http\Request;

class SignoController extends Controller
{

    /**
     * Lista de Signos.
     * @OA\Get (
     *     path="/api/v0/signos/",
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
     *                         example="Signo"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $signos = Signo::all();
        return $signos;
    }
}
