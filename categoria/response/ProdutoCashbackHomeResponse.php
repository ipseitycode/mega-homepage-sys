<?php
class ProdutoCashbackHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoCashbackHomeValidator();
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
                    $transferItem->setDescricao($item['descricao']);
                    $transferItem->setDataCriacao($item['data_criacao']);
                    $transferItem->setDataExpiracao($item['data_expiracao']);
                    $transferItem->setPublicar($item['publicar']);
                    $transferItem->setCategoriaId($item['categoria_id']);
                    $transferItem->setLojaId($item['loja_id']);

                    $itens[] = $transferItem;
                }

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoCashbackHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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