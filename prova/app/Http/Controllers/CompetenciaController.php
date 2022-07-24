<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{

    public function index()
    {
        $competencias = Competencia::all();
        return $competencias;
    }
}
