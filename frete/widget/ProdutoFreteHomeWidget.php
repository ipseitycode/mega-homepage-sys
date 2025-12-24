<?php
class ProdutoFreteHomeWidget {

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
                'tipo' => $objeto->getTipo(),
                'prazo_min_dias' => $objeto->getPrazoMinDias(),
                'prazo_max_dias' => $objeto->getPrazoMaxDias(),
                'valor' => $objeto->getValor(),
                'frete_gratis_acima' => $objeto->getFreteGratisAcima(),
                'transportadora' => $objeto->getTransportadora()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 