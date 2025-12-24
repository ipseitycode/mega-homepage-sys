<?php
class ProdutoFreteHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoFreteHomeValidator();
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
                    $transferItem->setTipo($item['tipo']);
                    $transferItem->setPrazoMinDias($item['prazo_min_dias']);
                    $transferItem->setPrazoMaxDias($item['prazo_max_dias']);
                    $transferItem->setValor($item['valor']);
                    $transferItem->setFreteGratisAcima($item['frete_gratis_acima']);
                    $transferItem->setTransportadora($item['transportadora']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoFreteHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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