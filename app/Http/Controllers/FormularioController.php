<?php

namespace App\Http\Controllers;

class FormularioController extends Controller
{
    public function renderizarFormulario()
    {
        return view('app.arquivo.formulario');
    }
}
