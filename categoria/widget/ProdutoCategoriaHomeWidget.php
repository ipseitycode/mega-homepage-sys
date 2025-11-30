<?php
class ProdutoCategoriaHomeWidget {

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
                'cor' => $objeto->getCor(),
                'peso' => $objeto->getPeso(),
                'dimensoes' => $objeto->getDimensoes(),
                'material' => $objeto->getMaterial(),
                'conectividade' => $objeto->getConectividade(),
                'autonomia_bateria' => $objeto->getAutonomiaBateria(),
                'tempo_carregamento' => $objeto->getTempoCarregamento(),
                'garantia' => $objeto->getGarantia(),
                'conteudo_embalagem' => $objeto->getConteudoEmbalagem(),
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 