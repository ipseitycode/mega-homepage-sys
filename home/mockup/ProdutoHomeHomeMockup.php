<?php

class ProdutoHomeHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'titulo' => 'Página Inicial - Destaques EletroPrime',
            'banners' => [
                ['imagem' => 'banner-smartphones.jpg', 'link' => '/categoria/celulares-e-smartphones'],
                ['imagem' => 'banner-ofertas.jpg', 'link' => '/ofertas']
            ],
            'categorias_destaque' => [1],
            'colecoes_destaque' => [1],
            'data_atualizacao' => '2025-01-11 12:00:00'
        ];
    }
}
