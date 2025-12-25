<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'validator/ProdutoSubcategoriaHomeValidator.php';
require 'exception/ProdutoSubcategoriaHomeException.php';

require '../includes/interfaces/ProdutoHomeTransferInterface.php';
require 'transfer/ProdutoSubcategoriaHomeTransfer.php';

require 'repository/ProdutoSubcategoriaHomeRepository.php';
require 'configuration/ProdutoSubcategoriaHomeConfiguration.php';
require 'mockup/ProdutoSubcategoriaHomeMockup.php';
require 'response/ProdutoSubcategoriaHomeResponse.php';
require 'service/ProdutoSubcategoriaHomeService.php';
require 'transfer/ProdutoSubcategoriaHomeResponseTransfer.php';
require 'transfer/ProdutoSubcategoriaHomeRequestTransfer.php';
require 'request/ProdutoSubcategoriaHomeRequest.php';
require 'view/ProdutoSubcategoriaHomeView.php';
require 'widget/ProdutoSubcategoriaHomeWidget.php';
require 'controller/ProdutoSubcategoriaHomeController.php';

class Startup
{
    public function visualizarTeste()
    {
        $teste = $_GET['teste'] ?? 'mockup';

        if ($teste === 'configuration') {
            return $this->configuration();
        }

        if ($teste === 'controller') {
            return $this->controller();
        }

        if ($teste === 'exception') {
            return $this->exception();
        }

        if ($teste === 'mockup') {
            return $this->mockup();
        }

        if ($teste === 'repository') {
            return $this->repository();
        }

        if ($teste === 'request') {
            return $this->request();
        }

        if ($teste === 'requestTransfer') {
            return $this->requestTransfer();
        }

        if ($teste === 'response') {
            return $this->response();
        }

        if ($teste === 'responseTransfer') {
            return $this->responseTransfer();
        }

        if ($teste === 'service') {
            return $this->service();
        }

        if ($teste === 'transfer') {
            return $this->transfer();
        }

        if ($teste === 'validator') {
            return $this->validator();
        }

        if ($teste === 'view') {
            return $this->view();
        }

        if ($teste === 'widget') {
            return $this->widget();
        }

        return $this->mockup();
    }

    public function configuration()
    {
        //SEM CONFIGURATION
    } 

    public function controller()
    {
        header('Content-Type: application/json; charset=utf-8');
        $controller = new ProdutoSubcategoriaHomeController();
        return $controller->obterSelecionar();
    }
    
    public function service()
    {
        header('Content-Type: application/json; charset=utf-8');

        $requestTransfer = new ProdutoSubcategoriaHomeRequestTransfer;
        $service = new ProdutoSubcategoriaHomeService($requestTransfer);

        $dados = $service->executarSelecionar();

        $mockupDados = ProdutoSubcategoriaHomeMockup::retornarItem();
        $chaves = array_keys($mockupDados);

        $lista = [];

        foreach ($dados as $objeto) {

            $item = [];

            foreach ($chaves as $chave) {

                $normalizada = str_replace('-', '_', $chave);

                $partes = explode('_', $normalizada);

                $metodo = 'get' . ucfirst(array_shift($partes));

                foreach ($partes as $parte) {
                    $metodo .= ucfirst($parte);
                }

                if (method_exists($objeto, $metodo)) {
                    $item[$chave] = $objeto->$metodo();
                } else {
                    $item[$chave] = null;
                }
            }

            $lista[] = $item;
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function response()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoSubcategoriaHomeResponseTransfer;
        $mockupLista = ProdutoSubcategoriaHomeMockup::retornarLista();
        $mockupItem = ProdutoSubcategoriaHomeMockup::retornarItem();

        $response = new ProdutoSubcategoriaHomeResponse();
        $responseLista = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $chaves = array_keys($mockupItem); 

        $lista = [];

        foreach ($responseLista as $objeto) {

            $item = [];

            foreach ($chaves as $chave) {

                $normalizada = str_replace('-', '_', $chave);

                $partes = explode('_', $normalizada);

                $metodo = 'get' . ucfirst(array_shift($partes));

                foreach ($partes as $parte) {
                    $metodo .= ucfirst($parte);
                }

                if (method_exists($objeto, $metodo)) {
                    $item[$chave] = $objeto->$metodo();
                } else {
                    $item[$chave] = null;
                }
            }

            $lista[] = $item;
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }   

    public function responseTransfer()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoSubcategoriaHomeResponseTransfer;
        $mockupLista = ProdutoSubcategoriaHomeMockup::retornarLista();
        $mockupItem = ProdutoSubcategoriaHomeMockup::retornarItem();
        
        $response = new ProdutoSubcategoriaHomeResponse();
        $responseLista = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $chaves = array_keys($mockupItem); 

        $lista = [];

        foreach ($responseLista as $objeto) {

            $item = [];

            foreach ($chaves as $chave) {

                $normalizada = str_replace('-', '_', $chave);

                $partes = explode('_', $normalizada);

                $metodo = 'get' . ucfirst(array_shift($partes));

                foreach ($partes as $parte) {
                    $metodo .= ucfirst($parte);
                }

                if (method_exists($objeto, $metodo)) {
                    $item[$chave] = $objeto->$metodo();
                } else {
                    $item[$chave] = null;
                }
            }

            $lista[] = $item;
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function request()
    {   
        header('Content-Type: application/json; charset=utf-8');
        $requestTransfer = new ProdutoSubcategoriaHomeRequestTransfer();
    
        $request = new ProdutoSubcategoriaHomeRequest();
        $requestTransfer = $request->build($requestTransfer);
        
        $dados = [
            'projeto' => $requestTransfer->getProjeto(),
            'pacote' => $requestTransfer->getPacote(),
            'modulo' => $requestTransfer->getModulo(),
            'pagina' => $requestTransfer->getPagina(),
            'acao' => $requestTransfer->getAcao(),
            'campo' => $requestTransfer->getCampo(),
            'valor' => $requestTransfer->getValor()
        ];
        
        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function requestTransfer()
    {
        header('Content-Type: application/json; charset=utf-8');
        
        // Cria o RequestTransfer
        $requestTransfer = new ProdutoSubcategoriaHomeRequestTransfer();
        
        $requestTransfer->setProjeto('ecommerce');
        $requestTransfer->setPacote('produto');
        $requestTransfer->setModulo('caracteristica');
        $requestTransfer->setPagina('home');
        $requestTransfer->setAcao('selecionar');
        $requestTransfer->setCampo('status');
        $requestTransfer->setValor('ativo');
        
        $dados = [
            'projeto' => $requestTransfer->getProjeto(),
            'pacote' => $requestTransfer->getPacote(),
            'modulo' => $requestTransfer->getModulo(),
            'pagina' => $requestTransfer->getPagina(),
            'acao' => $requestTransfer->getAcao(),
            'campo' => $requestTransfer->getCampo(),
            'valor' => $requestTransfer->getValor()
        ];
        
        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function transfer()
    {
        header('Content-Type: application/json; charset=utf-8');
        $mockupDados = ProdutoSubcategoriaHomeMockup::retornarItem();
        $objetoLista = new ProdutoSubcategoriaHomeTransfer($mockupDados);

        $dados = [
            'id' => $objetoLista->getId(),
            'codigo' => $objetoLista->getCodigo(),
            'url' => $objetoLista->getUrl(),
            'nome' => $objetoLista->getNome(),
            'descricao' => $objetoLista->getDescricao(),
            'data_criacao' => $objetoLista->getDataCriacao(),
            'data_expiracao' => $objetoLista->getDataExpiracao(),
            'publicar' => $objetoLista->getPublicar(),
            'categoria_id' => $objetoLista->getCategoriaId(),
            'loja_id' => $objetoLista->getLojaId()
        ];

        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function mockup()
    {
        header('Content-Type: application/json; charset=utf-8');
        $dados = ProdutoSubcategoriaHomeMockup::retornarItem();
        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function repository()
    {
        //SEM REPOSITORY
    }

    public function exception()
    {
        header('Content-Type: application/json; charset=utf-8');
        
        $servico = "ProdutoSubcategoriaHome::Exception";
        
        $metodos = [
            'parado',
            'iniciado',
            'concluido',
            'bloqueado',
            'cancelado',
            'expirado',
            'existente',
            'inexistente',
            'correto',
            'incorreto',
            'removido',
            'atualizado',
            'localizado',
            'produzido',
            'conectado',
            'desconectado',
            'generico'
        ];
        
        $resultados = [];
        
        foreach ($metodos as $metodo) {
            if (method_exists('ProdutoSubcategoriaHomeException', $metodo)) {
                $descricao = "Testando o método {$metodo} da classe Exception";
                $resultados[$metodo] = ProdutoSubcategoriaHomeException::$metodo($servico, $descricao);
            }
        }
        
        return json_encode($resultados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function validator()
    {
        //SEM VALIDATOR
    }

    public function view()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoSubcategoriaHomeResponseTransfer;
        $mockupLista = ProdutoSubcategoriaHomeMockup::retornarLista();

        $response = new ProdutoSubcategoriaHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $view = new ProdutoSubcategoriaHomeView();
        return $view->exibirSelecionar($responseTransfer);
    }

    public function widget()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoSubcategoriaHomeResponseTransfer;
        $mockupLista = ProdutoSubcategoriaHomeMockup::retornarLista();

        $response = new ProdutoSubcategoriaHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $widget = new ProdutoSubcategoriaHomeWidget($responseTransfer);
        return $widget->visualizarSelecionar();
    }

}

$visualizar = new Startup();
print $visualizar->visualizarTeste();