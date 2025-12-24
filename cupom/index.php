<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'validator/ProdutoCupomHomeValidator.php';
require 'exception/ProdutoCupomHomeException.php';

require '../includes/interfaces/ProdutoHomeTransferInterface.php';
require 'transfer/ProdutoCupomHomeTransfer.php';

require 'repository/ProdutoCupomHomeRepository.php';
require 'configuration/ProdutoCupomHomeConfiguration.php';
require 'mockup/ProdutoCupomHomeMockup.php';
require 'response/ProdutoCupomHomeResponse.php';
require 'service/ProdutoCupomHomeService.php';
require 'transfer/ProdutoCupomHomeResponseTransfer.php';
require 'transfer/ProdutoCupomHomeRequestTransfer.php';
require 'request/ProdutoCupomHomeRequest.php';
require 'view/ProdutoCupomHomeView.php';
require 'widget/ProdutoCupomHomeWidget.php';
require 'controller/ProdutoCupomHomeController.php';

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
        $controller = new ProdutoCupomHomeController();
        return $controller->obterSelecionar();
    }
    
    public function service()
    {
        header('Content-Type: application/json; charset=utf-8');

        $requestTransfer = new ProdutoCupomHomeRequestTransfer;
        $service = new ProdutoCupomHomeService($requestTransfer);

        $dados = $service->executarSelecionar();

        $mockupDados = ProdutoCupomHomeMockup::retornarItem();
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

        $responseTransfer = new ProdutoCupomHomeResponseTransfer;
        $mockupLista = ProdutoCupomHomeMockup::retornarLista();
        $mockupItem = ProdutoCupomHomeMockup::retornarItem();

        $response = new ProdutoCupomHomeResponse();
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

        $responseTransfer = new ProdutoCupomHomeResponseTransfer;
        $mockupLista = ProdutoCupomHomeMockup::retornarLista();
        $mockupItem = ProdutoCupomHomeMockup::retornarItem();
        
        $response = new ProdutoCupomHomeResponse();
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
        $requestTransfer = new ProdutoCupomHomeRequestTransfer();
    
        $request = new ProdutoCupomHomeRequest();
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
        $requestTransfer = new ProdutoCupomHomeRequestTransfer();
        
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
        $mockupDados = ProdutoCupomHomeMockup::retornarItem();
        $objetoLista = new ProdutoCupomHomeTransfer($mockupDados);

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
        $dados = ProdutoCupomHomeMockup::retornarItem();
        return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function repository()
    {
        //SEM REPOSITORY
    }

    public function exception()
    {
        header('Content-Type: application/json; charset=utf-8');
        
        $servico = "ProdutoCupomHome::Exception";
        
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
            if (method_exists('ProdutoCupomHomeException', $metodo)) {
                $descricao = "Testando o método {$metodo} da classe Exception";
                $resultados[$metodo] = ProdutoCupomHomeException::$metodo($servico, $descricao);
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

        $responseTransfer = new ProdutoCupomHomeResponseTransfer;
        $mockupLista = ProdutoCupomHomeMockup::retornarLista();

        $response = new ProdutoCupomHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $view = new ProdutoCupomHomeView();
        return $view->exibirSelecionar($responseTransfer);
    }

    public function widget()
    {
        header('Content-Type: application/json; charset=utf-8');

        $responseTransfer = new ProdutoCupomHomeResponseTransfer;
        $mockupLista = ProdutoCupomHomeMockup::retornarLista();

        $response = new ProdutoCupomHomeResponse();
        $responseTransfer = $response->receberSelecionar($mockupLista, $responseTransfer);
        
        $widget = new ProdutoCupomHomeWidget($responseTransfer);
        return $widget->visualizarSelecionar();
    }

}

$visualizar = new Startup();
print $visualizar->visualizarTeste();