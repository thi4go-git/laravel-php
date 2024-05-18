<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArquivoProcessor;


class ArquivoController extends Controller
{

    protected $arquivoProcessor;

    public function __construct(ArquivoProcessor $arquivoProcessor)
    {
        $this->arquivoProcessor = $arquivoProcessor;
    }

    public function processarArquivos(Request $request)
    {
        $this->validarArquivos($request);

        $requestData = $request->all();
        $token = $requestData['_token'];
        $arquivos = $requestData['arquivos'];
        foreach ($arquivos as $arquivo) {
            try {
                $resultado = $this->arquivoProcessor->processarArquivo($arquivo);
                print_r($resultado);
                print("<br>");
            } catch (\Exception $e) {
                print_r('Erro de processamento: ' . $e->getMessage());
                print("<br>");
            }
        }
    }

    private function validarArquivos(Request $request)
    {
        $request->validate([
            'arquivos' => 'required|mimes:xlsx,xls|max:2048'
        ], [
            'arquivos.required' => 'Favor selecionar o(s) arquivo(s).',
            'arquivos.mimes' => 'O Sistema requer o envio de arquivos com extensões: xlsx ou xls',
            'arquivos.max' => 'O Tamanho :max excede o máximo permitido de 2MB.',
        ]);
    }
}
