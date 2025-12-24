<?php
class ProdutoPagamentoHomeWidget {

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
                'metodo' => $objeto->getMetodo(),
                'bandeiras_aceitas' => $objeto->getBandeirasAceitas(),
                'parcelas_max' => $objeto->getParcelasMax(),
                'juros' => $objeto->getJuros(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 