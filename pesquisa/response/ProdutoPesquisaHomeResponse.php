<?php
class ProdutoPesquisaHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoPesquisaHomeValidator();
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
                    $transferItem->setTermo($item['termo']);
                    $transferItem->setFiltros($item['filtros']);
                    $transferItem->setOrdenacao($item['ordenacao']);
                    $transferItem->setTotalResultados($item['total_resultados']);
                    $transferItem->setDataBusca($item['data_busca']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoPesquisaHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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