<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ArquivoService
{
    public function processarArquivos($arquivos)
    {
        foreach ($arquivos as $arquivo) {
            try {
                $mimeType = $arquivo->getMimeType();
                if ($mimeType === 'application/pdf') {
                    $dados =  $this->processarPDF($arquivo);
                } elseif ($mimeType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                    $dados =  $this->processarXLSX($arquivo);

                    echo "<pre>";
                    foreach ($dados as $linha) {
                        print_r($linha);
                        echo "\n";
                    }
                    echo "</pre>";
                } elseif ($mimeType === 'application/vnd.ms-excel') {
                    $dados =  $this->processarXLS($arquivo);
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
        // Obter o caminho real do arquivo temporário
        $filePath = $arquivo->getRealPath();

        // Carregar a planilha
        $spreadsheet = IOFactory::load($filePath);

        // Obter a primeira aba da planilha
        $worksheet = $spreadsheet->getActiveSheet();

        // Ler os dados da planilha
        $dados = [];
        foreach ($worksheet->getRowIterator() as $row) {
            $linha = [];
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            foreach ($cellIterator as $cell) {
                $valor = $cell->getValue();
                if (!empty($valor)) {
                    $linha[] = $valor;
                }
            }

            // Verificar se $linha não está vazio antes de adicionar a $dados
            if (!empty($linha)) {
                $dados[] = $linha;
            }
        }

        return $dados;
    }

    private function processarXLS(UploadedFile $arquivo)
    {
        dd($arquivo);
    }
}
