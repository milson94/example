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

Route::get('/', function () {
    return view('form');
});

Route::get('tarefas', function() {
    return view('listar');
});

Route::post('inserirTarefa', [App\Http\Controllers\TarefasController::class, 'inserirTarefa'])->name('tarefa');

Route::get('show', [App\Http\Controllers\TarefasController::class, 'showData'])->name('tarefa');

Route::get('update/{nome}', [App\Http\Controllers\TarefasController::class, 'update'])->name('tarefa');

Route::get('remover/{value}', [App\Http\Controllers\TarefasController::class, 'remover'])->name('tarefa');




// C:\xampp\htdocs\example\app
