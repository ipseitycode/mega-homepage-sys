<?php
class ProdutoPesquisaHomeWidget {

    private $responseTransfer;

    public function __construct($responseTransfer)
    {
        $this->responseTransfer = $responseTransfer;
    } 

    public function visualizarSelecionar(): string
    {

        $lista = []; 

        foreach ($this->responseTransfer as $objeto) {
            $lista[] = [
                'id' => $objeto->getId(),
                'termo' => $objeto->getTermo(),
                'filtros' => $objeto->getFiltros(),
                'ordenacao' => $objeto->getOrdenacao(),
                'total_resultados' => $objeto->getTotalResultados(),
                'data_busca' => $objeto->getDataBusca()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 