<?php

class ProdutoSubcategoriaHomeService
{
    private $validator;
    private $mockup;
    private $response;
    private $requestTransfer;
    private $responseTransfer;
    private $mensagem = [];

    public function __construct($requestTransfer) 
    {
        $this->validator = new ProdutoSubcategoriaHomeValidator();
        $this->mockup = new ProdutoSubcategoriaHomeMockup();
        $this->response = new ProdutoSubcategoriaHomeResponse();
        $this->requestTransfer = $requestTransfer;
        $this->responseTransfer = new ProdutoSubcategoriaHomeResponseTransfer();
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
                        $this->mensagem[] = ProdutoSubcategoriaHomeException::inexistente(__METHOD__, 'receberSelecionar.inexistente');
                    }
                }

            } else {
                $this->mensagem[] = ProdutoSubcategoriaHomeException::inexistente(__METHOD__, 'retornarLista.inexistente');
            }

        } catch (Exception $e) {
            $this->mensagem[] = ProdutoSubcategoriaHomeException::incorreto(__METHOD__, 'service.incorreto=' . $e->getMessage());
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