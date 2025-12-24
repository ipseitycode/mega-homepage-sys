<?php

class ProdutoLancamentoHomeController
{
    private $validator;
    private $request;
    private $requestTransfer;
    private $view;
    private $mensagem = [];
  
    public function __construct() 
    {   
        $this->validator = new ProdutoLancamentoHomeValidator();

        $requestTransfer = new ProdutoLancamentoHomeRequestTransfer();
        $this->request = new ProdutoLancamentoHomeRequest();
        $this->requestTransfer = $this->request->build($requestTransfer);

        $this->view = new ProdutoLancamentoHomeView();
    }
 
    public function obterSelecionar()
    {
        $resultado = '';
 
        try { 

            $service = new ProdutoLancamentoHomeService($this->requestTransfer);

            if ($this->validator->validarClasseMetodo($service, 'executarSelecionar')) 
            { 
                $dadosLista = $service->executarSelecionar();

                // print_r($dadosLista); exit();

                if (!$this->validator->validarArrayObjeto($dadosLista)) {

                    //WIDGET DE ERRO:
                    // - nao é objeto
                    // - retornou vazio
                    exit();
                }

                if ($this->validator->validarClasseMetodo($this->view, 'exibirSelecionar')) 
                {
                    $resultado = $this->view->exibirSelecionar($dadosLista);

                } else {
                    $this->mensagem[] = ProdutoLancamentoHomeException::inexistente(__METHOD__, 'exibirSelecionar.inexistente');
                }

            } else {
                $this->mensagem[] = ProdutoLancamentoHomeException::inexistente(__METHOD__, 'executarSelecionar.inexistente');
            }

        } catch (Exception $e) {
            $this->mensagem[] = ProdutoLancamentoHomeException::incorreto(__METHOD__, 'controller.incorreto=' . $e->getMessage());
        }

        return $resultado;
    }

    public function obterAdicionar()
    {
        
    }

    public function obterRemover()
    {
        
    }

    public function obterAtualizar()
    {
        
    }

    public function obterFiltrar()
    {
        
    }

    public function obterPesquisar()
    {
        
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