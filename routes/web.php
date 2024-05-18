<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ArquivoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/formulario',
    [FormularioController::class, 'renderizarFormulario']
)->name('arquivo.formulario');

Route::post('/processarArquivos', [ArquivoController::class, 'processarArquivos'])->name('arquivos.processar');
