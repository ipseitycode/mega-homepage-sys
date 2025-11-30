<?php
class ProdutoCashbackHomeWidget {

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
                'data_criacao' => $objeto->getDataCriacao(),
                'data_expiracao' => $objeto->getDataExpiracao(),
                'publicar' => $objeto->getPublicar(),
                'categoria_id' => $objeto->getCategoriaId(),
                'loja_id' => $objeto->getLojaId()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 