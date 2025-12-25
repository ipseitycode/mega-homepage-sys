<?php
class ProdutoSubcategoriaHomeWidget {

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
                'categoria_id' => $objeto->getCategoriaId(),
                'nome' => $objeto->getNome(),
                'slug' => $objeto->getSlug(),
                'descricao' => $objeto->getDescricao(),
                'data_criacao' => $objeto->getDataCriacao(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 