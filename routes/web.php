<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('form-inserir', [App\Http\Controllers\TarefasController::class, 'mostrarViewDeInsercao'])->name('viewInsercao');

Route::get('form-update/{tarefa}', [App\Http\Controllers\TarefasController::class, 'mostrarViewDeAtualizacao'])->name('viewAtualizacao');
Route::post('atualizar', [App\Http\Controllers\TarefasController::class, 'atualizarTarefa'])->name('atualizar');

Route::post('/inserirTarefa', [App\Http\Controllers\TarefasController::class, 'inserirTarefa'])->name('inserir');

Route::get('/', [App\Http\Controllers\TarefasController::class, 'showData'])->name('show');

Route::get('update/{nome}', [App\Http\Controllers\TarefasController::class, 'update'])->name('update');

Route::get('remover/{value}', [App\Http\Controllers\TarefasController::class, 'remover'])->name('remover');




// C:\xampp\htdocs\example\app
