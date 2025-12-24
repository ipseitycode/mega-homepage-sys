<?php
class ProdutoLancamentoHomeWidget {

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
                'descricao_curta' => $objeto->getDescricaoCurta(),
                'data_lancamento' => $objeto->getDataLancamento(),
                'data_disponibilidade' => $objeto->getDataDisponibilidade(),
                'estoque_inicial' => $objeto->getEstoqueInicial(),
                'preco_lancamento' => $objeto->getPrecoLancamento(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 