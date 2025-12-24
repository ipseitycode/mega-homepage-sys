<?php
class ProdutoColecaoHomeWidget {

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
                'nome' => $objeto->getNome(),
                'descricao' => $objeto->getDescricao(),
                'tema' => $objeto->getTema(),
                'data_inicio' => $objeto->getDataInicio(),
                'data_fim' => $objeto->getDataFim(),
                'publicar' => $objeto->getPublicar()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 