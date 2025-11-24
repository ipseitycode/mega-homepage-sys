<?php
class ProdutoCaracteristicaHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoCaracteristicaHomeValidator();
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
                    $transferItem->setCor($item['cor']);
                    $transferItem->setPeso($item['peso']);
                    $transferItem->setDimensoes($item['dimensoes']);
                    $transferItem->setMaterial($item['material']);
                    $transferItem->setConectividade($item['conectividade']);
                    $transferItem->setAutonomiaBateria($item['autonomia_bateria']);
                    $transferItem->setTempoCarregamento($item['tempo_carregamento']);
                    $transferItem->setGarantia($item['garantia']);
                    $transferItem->setConteudoEmbalagem($item['conteudo_embalagem']);

                    $itens[] = $transferItem;
                }

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoCaracteristicaHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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