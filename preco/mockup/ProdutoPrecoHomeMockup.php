<?php

class ProdutoPrecoHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'produto_id' => 100,
            'preco_base' => 2499.90,
            'preco_promocional' => 2199.90,
            'moeda' => 'BRL',
            'data_atualizacao' => '2025-01-10 10:00:00'
        ];
    }
}
