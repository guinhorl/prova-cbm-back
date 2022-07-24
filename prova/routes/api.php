<?php

use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\SignoController;
use App\Http\Controllers\TipoSanguineoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Requests $request) {
//    return $request->user();
//});
Route::prefix('v0')->group(function () {
    Route::get('signos', [SignoController::class, 'index']);
    Route::get('tipo-sanguineos', [TipoSanguineoController::class, 'index']);
    Route::get('instituicoes', [InstituicaoController::class, 'index']);
    Route::get('competencias', [CompetenciaController::class, 'index']);
    Route::get('perfis', [PessoaController::class, 'index']);
    Route::get('perfis/{id}', [PessoaController::class, 'show']);
    Route::delete('perfis/{id}', [PessoaController::class, 'destroy']);
    Route::put('perfis/{id}', [PessoaController::class, 'update']);
    Route::post('perfis', [PessoaController::class, 'store']);
});
