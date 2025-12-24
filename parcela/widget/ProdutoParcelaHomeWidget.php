<?php
class ProdutoParcelaHomeWidget {

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
                'pedido_id' => $objeto->getPedidoId(),
                'numero_parcela' => $objeto->getNumeroParcela(),
                'valor' => $objeto->getValor(),
                'data_vencimento' => $objeto->getDataVencimento(),
                'status' => $objeto->getStatus()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 