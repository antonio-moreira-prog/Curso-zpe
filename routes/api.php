<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Curriculo\ListarCurriculosController;
use App\Http\Controllers\Curriculo\CriarCurriculoController;
use App\Http\Controllers\Curriculo\EditarCurriculoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/dependencias/{id}', function (Request $request, int $id) {
    if ($request->has('nome')){
        return response()->json(['Aluno salvo', $id ],200);
    }
    return  response()->json('Ops! house um problema', 433);
})  ->name('dependencia')
    ->where('id', '[0-9]+');

Route::get('/curriculo{id}', ListarCurriculosController::class);
Route::post('/curriculo', CriarCurriculoController::class);
Route::put('/curriculo/{id}', EditarCurriculoController::class) -> where(['id' => '[0-9]+']);
Route::delete('/curriculo/{id}', DeletarCurriculoController::class);
