<?php

class ProdutoImagemHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'Banner Principal da Loja',
            'tipo' => 'banner',
            'arquivo' => 'banner-loja-2025.png',
            'url' => 'https://cdn.ecommerce-exemplo.com/banners/banner-loja-2025.png',
            'data_upload' => '2025-01-05 14:32:00',
            'largura_px' => 1920,
            'altura_px' => 600,
            'tamanho_kb' => 850,
            'formato' => 'png',
            'cor_predominante' => '#1A73E8',
            'descricao' => 'Banner promocional utilizado na página inicial da loja.',
            'alt_text' => 'Banner promocional da loja com destaque para ofertas de 2025',
            'responsiva' => true,
            'ativo' => true
        ];
    }
}
