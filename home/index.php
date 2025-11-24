<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'mockup/ProdutoHomeHomeMockup.php';

require_once '../includes/interfaces/ProdutoHomeTransferInterface.php';
require_once 'transfer/ProdutoHomeHomeTransfer.php';
require_once 'mockup/ProdutoHomeHomeMockup.php';

class Startup
{
    public static function VisualizarJson(): string
    {

        $teste = $_GET['teste'] ?? 'mockup';

        if ($teste === 'mockup') {
            
            header('Content-Type: application/json; charset=utf-8');
            $dados = ProdutoHomeHomeMockup::pesquisarDados();
            return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        }

        if ($teste === 'transfer') {

            header('Content-Type: application/json; charset=utf-8');
            $mockupDados = ProdutoHomeHomeMockup::pesquisarDados();
            $objetoLista = new ProdutoHomeHomeTransfer($mockupDados);

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