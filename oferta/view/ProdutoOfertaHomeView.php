<?php

class ProdutoOfertaHomeView
{
    private $validator;
    private $mensagem = [];
    
    public function __construct() {   

        $this->validator = new ProdutoOfertaHomeValidator();
    }

    public function exibirSelecionar($responseTransfer)  
    {
        $resultado = '';
        // $resultado = null;

        try { 
            
            if ($this->validator->validarArrayObjeto($responseTransfer)) {

                $widget = new ProdutoOfertaHomeWidget($responseTransfer);
                $resultado = $widget->visualizarSelecionar();
                // header('Content-Type: application/json; charset=utf-8');
                // echo json_encode($relatorio, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }

        } catch (Exception $e) {
            $this->mensagem[] = ProdutoOfertaHomeException::incorreto(__METHOD__, 'view.incorreto=' . $e->getMessage());
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