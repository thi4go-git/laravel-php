<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ArquivoController;

//Route::get('/', function () {return view('app.welcome');});

Route::get('/informacao', function () {
    return view('app.informacao');
})->name('site.informacao');

Route::get(
    '/formulario',
    [FormularioController::class, 'renderizarFormulario']
)->name('arquivo.formulario');

Route::post('/processarArquivos', [ArquivoController::class, 'processarArquivos'])->name('arquivos.processar');
