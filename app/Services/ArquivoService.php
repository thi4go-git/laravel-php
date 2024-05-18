<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;


class ArquivoService
{
    public function processarArquivos($arquivos)
    {
        foreach ($arquivos as $arquivo) {
            try {
                $mimeType = $arquivo->getMimeType();
                if ($mimeType === 'application/pdf') {
                    return $this->processarPDF($arquivo);
                } elseif ($mimeType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                    return $this->processarXLSX($arquivo);
                } elseif ($mimeType === 'application/vnd.ms-excel') {
                    return $this->processarXLS($arquivo);
                } else {
                    throw new \Exception('Tipo de arquivo não suportado');
                }
            } catch (\Exception $e) {
                print_r('Erro de processamento: ' . $e->getMessage());
                print("<br>");
            }
        }
    }


    public function processarArquivosBKP($arquivos)
    {
        foreach ($arquivos as $arquivo) {
            try {
                $mimeType = $arquivo->getMimeType();
                if ($mimeType === 'application/pdf') {
                    return $this->processarPDF($arquivo);
                } elseif ($mimeType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                    return $this->processarXLSX($arquivo);
                } elseif ($mimeType === 'application/vnd.ms-excel') {
                    return $this->processarXLS($arquivo);
                } else {
                    throw new \Exception('Tipo de arquivo não suportado');
                }
            } catch (\Exception $e) {
                print_r('Erro de processamento: ' . $e->getMessage());
                print("<br>");
            }
        }
    }

    private function processarPDF(UploadedFile $arquivo)
    {
        dd($arquivo);
    }

    private function processarXLSX(UploadedFile $arquivo)
    {
        dd($arquivo);
    }

    private function processarXLS(UploadedFile $arquivo)
    {
        dd($arquivo);
    }
}
