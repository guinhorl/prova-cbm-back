<?php

namespace App\Http\Controllers;

use App\Models\Signo;
use Illuminate\Http\Request;

class SignoController extends Controller
{

    public function index()
    {
        $signos = Signo::all();
        return $signos;
    }
}
