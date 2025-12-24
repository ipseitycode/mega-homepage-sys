<?php
class ProdutoMarcaHomeWidget {

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
                'slug' => $objeto->getSlug(),
                'descricao' => $objeto->getDescricao(),
                'pais_origem' => $objeto->getPaisOrigem(),
                'site' => $objeto->getSite()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 