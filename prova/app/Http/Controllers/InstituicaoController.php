<?php

namespace App\Http\Controllers;

use App\Models\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function index()
    {
        $instituicoes = Instituicao::all();
        return $instituicoes;
    }
}
