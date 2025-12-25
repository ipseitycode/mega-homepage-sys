<?php
class ProdutoPrecoHomeWidget {

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
                'produto_id' => $objeto->getProdutoId(),
                'preco_base' => $objeto->getPrecoBase(),
                'preco_promocional' => $objeto->getPrecoPromocional(),
                'moeda' => $objeto->getMoeda(),
                'data_atualizacao' => $objeto->getDataAtualizacao()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 