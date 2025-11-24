<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'validator/ProdutoCaracteristicaHomeValidator.php';
require 'exception/ProdutoCaracteristicaHomeException.php';

require '../includes/interfaces/ProdutoHomeTransferInterface.php';
require 'transfer/ProdutoCaracteristicaHomeTransfer.php';

require 'entity/ProdutoCaracteristicaHomeEntity.php';
require 'repository/ProdutoCaracteristicaHomeRepository.php';
require 'configuration/ProdutoCaracteristicaHomeConfiguration.php';
require 'mockup/ProdutoCaracteristicaHomeMockup.php';
require 'response/ProdutoCaracteristicaHomeResponse.php';
require 'service/ProdutoCaracteristicaHomeService.php';
require 'transfer/ProdutoCaracteristicaHomeRequestTransfer.php';
require 'request/ProdutoCaracteristicaHomeRequest.php';
require 'view/ProdutoCaracteristicaHomeView.php';
require 'widget/ProdutoCaracteristicaHomeWidget.php';
require 'controller/ProdutoCaracteristicaHomeController.php';

class Startup
{
    public static function VisualizarJson(): string
    {

        $teste = $_GET['teste'] ?? 'mockup';

        if ($teste === 'mockup') {
            
            header('Content-Type: application/json; charset=utf-8');
            $dados = ProdutoCaracteristicaHomeMockup::pesquisarDados();
            return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        }

        if ($teste === 'transfer') {

            header('Content-Type: application/json; charset=utf-8');
            $mockupDados = ProdutoCaracteristicaHomeMockup::pesquisarDados();
            $objetoLista = new ProdutoCaracteristicaHomeTransfer($mockupDados);

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
        } else {

            return print 'Parametro Invalido';
        }
    }
}

print Startup::VisualizarJson();