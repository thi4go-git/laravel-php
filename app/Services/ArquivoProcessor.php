<?php

namespace App\Services;
use Illuminate\Http\UploadedFile;


class ArquivoProcessor
{
    public function processarArquivo(UploadedFile $arquivo)
    {
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
    }

    private function processarPDF(UploadedFile $arquivo)
    {
        // Exemplo básico de leitura de um arquivo PDF usando FPDI
        //$pdf = new Fpdi();
        //$pageCount = $pdf->setSourceFile($arquivo->getPathname());
        //for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        //   $pdf->AddPage();
        //  $templateId = $pdf->importPage($pageNo);
        // $pdf->useTemplate($templateId);
        // }
        return 'Não implementado leitura de PDF';
    }

    private function processarXLSX(UploadedFile $arquivo)
    {
        echo('processarXLSX');
        return 'processar XSLX';
    }

    private function processarXLS(UploadedFile $arquivo)
    {
        echo('processarXLS');
        return '';
    }
}
