<?php

use App\Http\Controllers\PessoaController;
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
    Route::get('pessoa', [PessoaController::class, 'index']);
    Route::post('pessoa', [PessoaController::class, 'store']);
});
