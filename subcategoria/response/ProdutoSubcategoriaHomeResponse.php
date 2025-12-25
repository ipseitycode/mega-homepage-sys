<?php
class ProdutoSubcategoriaHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoSubcategoriaHomeValidator();
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
                    $transferItem->setCategoriaId($item['categoria_id']);
                    $transferItem->setNome($item['nome']);
                    $transferItem->setSlug($item['slug']);
                    $transferItem->setDescricao($item['descricao']);
                    $transferItem->setDataCriacao($item['data_criacao']);
                    $transferItem->setAtivo($item['ativo']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoSubcategoriaHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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