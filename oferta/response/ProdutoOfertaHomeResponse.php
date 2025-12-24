<?php
class ProdutoOfertaHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoOfertaHomeValidator();
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
                    $transferItem->setTitulo($item['titulo']);
                    $transferItem->setDescricao($item['descricao']);
                    $transferItem->setTipo($item['tipo']);
                    $transferItem->setValor($item['valor']);
                    $transferItem->setDataInicio($item['data_inicio']);
                    $transferItem->setDataFim($item['data_fim']);
                    $transferItem->setAtivo($item['ativo']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoOfertaHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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