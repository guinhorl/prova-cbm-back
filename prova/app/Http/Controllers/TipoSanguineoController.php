<?php

namespace App\Http\Controllers;

use App\Models\TipoSanguineo;
use Illuminate\Http\Request;

class TipoSanguineoController extends Controller
{

    public function index()
    {
        $tipos = TipoSanguineo::all();
        return $tipos;
    }
}
