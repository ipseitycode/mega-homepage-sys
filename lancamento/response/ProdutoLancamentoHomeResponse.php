<?php
class ProdutoLancamentoHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoLancamentoHomeValidator();
    } 

    public function receberSelecionar($lista, $responseTransfer) 
    {
        
        $resultado = [];

        try {

            if ($this->validator->validarArray($lista)) {

                $itens = [];

                foreach ($lista as $item) {

                    $transferItem = clone $responseTransfer;

                    $transferItem->setId($item['id']);
                    $transferItem->setNome($item['nome']);
                    $transferItem->setDescricaoCurta($item['descricao_curta']);
                    $transferItem->setDataLancamento($item['data_lancamento']);
                    $transferItem->setDataDisponibilidade($item['data_disponibilidade']);
                    $transferItem->setEstoqueInicial($item['estoque_inicial']);
                    $transferItem->setPrecoLancamento($item['preco_lancamento']);
                    $transferItem->setAtivo($item['ativo']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoLancamentoHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
        }
            
        return $resultado;
    }

    public function visualizarMensagem()
    {
        foreach ($this->mensagem as $key => $msg) {
            print_r($msg);
        }

        return $this->mensagem;
    }

}
?>