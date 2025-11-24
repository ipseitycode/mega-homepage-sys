<?php

header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Startup
{
    public static function VisualizarJson(): string
    {
        $teste = $_GET['teste'] ?? 'mockup'; // mockup | transfer

        if ($teste === 'mockup') {
            require_once 'mockup/ProdutoCaracteristicaHomeMockup.php';
            $dados = ProdutoCaracteristicaHomeMockup::pesquisarDados();
            return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        if ($teste === 'transfer') {
            require_once 'transfer/ProdutoCaracteristicaHomeTransfer.php';

            $dados = [
                'id' => 1,
                'codigo' => 'ABC123',
                'url' => 'https://busqe.com/produto/abc123',
                'nome' => 'Produto Exemplo',
                'descricao' => 'Um produto de teste',
                'data_criacao' => '2025-11-13',
                'data_expiracao' => '2026-11-13',
                'publicar' => true,
                'categoria_id' => 5,
                'loja_id' => 2
            ];

            $obj = new ProdutoCaracteristicaHomeTransfer($dados);

            // Converter o objeto em array acessando os getters
            $resultado = [
                'id' => $obj->getId(),
                'codigo' => $obj->getCodigo(),
                'url' => $obj->getUrl(),
                'nome' => $obj->getNome(),
                'descricao' => $obj->getDescricao(),
                'data_criacao' => $obj->getDataCriacao(),
                'data_expiracao' => $obj->getDataExpiracao(),
                'publicar' => $obj->getPublicar(),
                'categoria_id' => $obj->getCategoriaId(),
                'loja_id' => $obj->getLojaId(),
            ];

            return json_encode($resultado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        return json_encode(['erro' => 'Parâmetro inválido'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}

print Startup::VisualizarJson();
