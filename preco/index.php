<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'validator/ProdutoPrecoHomeValidator.php';
require 'exception/ProdutoPrecoHomeException.php';

require '../includes/interfaces/ProdutoHomeTransferInterface.php';
require 'transfer/ProdutoPrecoHomeTransfer.php';

require 'repository/ProdutoPrecoHomeRepository.php';
require 'configuration/ProdutoPrecoHomeConfiguration.php';
require 'mockup/ProdutoPrecoHomeMockup.php';
require 'response/ProdutoPrecoHomeResponse.php';
require 'service/ProdutoPrecoHomeService.php';
require 'transfer/ProdutoPrecoHomeResponseTransfer.php';
require 'transfer/ProdutoPrecoHomeRequestTransfer.php';
require 'request/ProdutoPrecoHomeRequest.php';
require 'view/ProdutoPrecoHomeView.php';
require 'widget/ProdutoPrecoHomeWidget.php';
require 'controller/ProdutoPrecoHomeController.php';

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
        $controller = new ProdutoPrecoHomeController();
        return $controller->obterSelecionar();
    }
    
    public function service()
    {
        header('Content-Type: application/json; charset=utf-8');

        $requestTransfer = new ProdutoPrecoHomeRequestTransfer;
        $service = new ProdutoPrecoHomeService($requestTransfer);

        $dados = $service->executarSelecionar();

        $mockupDados = ProdutoPrecoHomeMockup::retornarItem();
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

        $responseTransfer = new ProdutoPrecoHomeResponseTransfer;
        $mockupLista = ProdutoPrecoHomeMockup::retornarLista();
        $mockupItem = ProdutoPrecoHomeMockup::retornarItem();

        $response = new ProdutoPrecoHomeResponse();
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

        $responseTransfer = new ProdutoPrecoHomeResponseTransfer;
        $mockupLista = ProdutoPrecoHomeMockup::retornarLista();
        $mockupItem = ProdutoPrecoHomeMockup::retornarItem();
        
        $response = new ProdutoPrecoHomeResponse();
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
        $requestTransfer = new ProdutoPrecoHomeRequestTransfer();
    
        $request = new ProdutoPrecoHomeRequest();
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
        $requestTransfer = new ProdutoPrecoHomeRequestTransfer();
        
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
        $mockupDados = ProdutoPrecoHomeMockup::retornarItem();
        $objetoLista = new ProdutoPrecoHomeTransfer($mockupDados);

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
        $dados = ProdutoPrecoHomeMockup::retornarItem();
        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function repository()
    {
        //SEM REPOSITORY
    }

    public function exception()
    {
        header('Content-Type: application/json; charset=utf-8');
        
        $servico = "ProdutoPrecoHome::Exception";
        
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
            if (method_exists('ProdutoPrecoHomeException', $metodo)) {
                $descricao = "Testando o método {$metodo} da classe Exception";
                $resultados[$metodo] = ProdutoPrecoHomeException::$metodo($servico, $descricao);
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

        $responseTransfer = new ProdutoPrecoHomeResponseTransfer;
        $mockupLista = ProdutoPrecoHomeMockup::retornarLista();

        $response = new ProdutoPrecoHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $view = new ProdutoPrecoHomeView();
        return $view->exibirSelecionar($responseTransfer);
    }

    public function widget()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoPrecoHomeResponseTransfer;
        $mockupLista = ProdutoPrecoHomeMockup::retornarLista();

        $response = new ProdutoPrecoHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $widget = new ProdutoPrecoHomeWidget($responseTransfer);
        return $widget->visualizarSelecionar();
    }

}

$visualizar = new Startup();
print $visualizar->visualizarTeste();