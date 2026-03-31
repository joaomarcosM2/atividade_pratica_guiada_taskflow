<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


# Atividade Pratica / Rota Sobre
use App\Http\Controllers\SobreController;
Route::get('/sobre', [SobreController::class, 'index']);

# Aula do professor / Rota teste
Route::get('/teste', function () {
return "Funcionando!";
});