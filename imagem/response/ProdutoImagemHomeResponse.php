<?php
class ProdutoImagemHomeResponse { 
    private $validator;
    private $mensagem = [];

    public function __construct() {

        $this->validator = new ProdutoImagemHomeValidator();
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
                    $transferItem->setTipo($item['tipo']);
                    $transferItem->setArquivo($item['arquivo']);
                    $transferItem->setUrl($item['url']);
                    $transferItem->setDataUpload($item['data_upload']);
                    $transferItem->setLarguraPx($item['largura_px']);
                    $transferItem->setAlturaPx($item['altura_px']);
                    $transferItem->setTamanhoKb($item['tamanho_kb']);
                    $transferItem->setFormato($item['formato']);
                    $transferItem->setCorPredominante($item['cor_predominante']);
                    $transferItem->setDescricao($item['descricao']);
                    $transferItem->setAltText($item['alt_text']);
                    $transferItem->setResponsiva($item['responsiva']);
                    $transferItem->setAtivo($item['ativo']);

                    $itens[] = $transferItem;
                } 

                $resultado = $itens;
            }

        } catch(Exception $e) {
            $this->mensagem[] = ProdutoImagemHomeException::incorreto(__METHOD__, 'response.incorreto=' . $e->getMessage());
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