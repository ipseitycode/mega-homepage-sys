<?php
class ProdutoCupomHomeWidget {

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
                'codigo' => $objeto->getCodigo(),
                'descricao' => $objeto->getDescricao(),
                'tipo' => $objeto->getTipo(),
                'valor' => $objeto->getValor(),
                'uso_maximo' => $objeto->getUsoMaximo(),
                'data_expiracao' => $objeto->getDataExpiracao(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 