<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function renderizarFormulario()
    {
        return view('app.arquivo.formulario');
    }
}
