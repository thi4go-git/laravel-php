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
        return '';
        // return response()->json(['message' => 'Formulario processado com sucesso!']);
    }
}
