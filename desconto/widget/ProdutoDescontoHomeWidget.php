<?php
class ProdutoDescontoHomeWidget {

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
                'tipo' => $objeto->getTipo(),
                'valor' => $objeto->getValor(),
                'origem' => $objeto->getOrigem(),
                'data_inicio' => $objeto->getDataInicio(),
                'data_fim' => $objeto->getDataFim(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 