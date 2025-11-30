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
                'nome' => $objeto->getNome(),
                'slug' => $objeto->getSlug(),
                'descricao' => $objeto->getDescricao(),
                'icone' => $objeto->getIcone(),
                'data_criacao' => $objeto->getDataCriacao(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 