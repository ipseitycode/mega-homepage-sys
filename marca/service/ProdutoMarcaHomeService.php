<?php

class ProdutoMarcaHomeService
{
    private $validator;
    private $mockup;
    private $response;
    private $requestTransfer;
    private $responseTransfer;
    private $mensagem = [];

    public function __construct($requestTransfer) 
    {
        $this->validator = new ProdutoMarcaHomeValidator();
        $this->mockup = new ProdutoMarcaHomeMockup();
        $this->response = new ProdutoMarcaHomeResponse();
        $this->requestTransfer = $requestTransfer;
        $this->responseTransfer = new ProdutoMarcaHomeResponseTransfer();
    }

    public function executarSelecionar() 
    {   
        $resultado = [];
        
        try {
            
            if ($this->validator->validarClasseMetodo($this->mockup, 'retornarLista')) 
            { 
                $dadosLista = $this->mockup->retornarLista();

                if ($this->validator->validarArray($dadosLista)) {
                    
                    if ($this->validator->validarClasseMetodo($this->response, 'receberSelecionar')) 
                    { 
                        $resultado = $this->response->receberSelecionar($dadosLista, $this->responseTransfer);

                    } else {
                        $this->mensagem[] = ProdutoMarcaHomeException::inexistente(__METHOD__, 'receberSelecionar.inexistente');
                    }
                }

            } else {
                $this->mensagem[] = ProdutoMarcaHomeException::inexistente(__METHOD__, 'retornarLista.inexistente');
            }

        } catch (Exception $e) {
            $this->mensagem[] = ProdutoMarcaHomeException::incorreto(__METHOD__, 'service.incorreto=' . $e->getMessage());
        } 

        return $resultado;
    }
    
    public function visualizarMensagem(bool $exibir = true)
    {
        if ($exibir) {
            foreach ($this->mensagem as $msg) {
                echo $msg . PHP_EOL;
            }
        }

        return $this->mensagem;
    }
    
}