<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArquivoService;


class ArquivoController extends Controller
{

    protected $arquivoService;

    public function __construct(ArquivoService $arquivoService)
    {
        $this->arquivoService = $arquivoService;
    }

    public function processarArquivos(Request $request)
    {
        $this->validarArquivos($request);
        $requestData = $request->all();
        //$token = $requestData['_token'];
        $arquivos = $requestData['arquivos'];
        $this->arquivoService->processarArquivos($arquivos);  
    }

    private function validarArquivos(Request $request)
    {
        $request->validate([
            'arquivos.*' => 'required|mimes:xlsx,xls|max:2048'
        ], [
            'arquivos.*.required' => 'Favor selecionar o(s) arquivo(s).',
            'arquivos.*.mimes' => 'O Sistema requer o envio de arquivos com extensões: xlsx ou xls',
            'arquivos.*.max' => 'O Tamanho :max excede o máximo permitido de 2MB.',
        ]);
    }
}
