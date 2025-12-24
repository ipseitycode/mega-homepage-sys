<?php

class ProdutoPrecoHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'produto_id' => 100,
            'preco_base' => 2499.90,
            'preco_promocional' => 2199.90,
            'moeda' => 'BRL',
            'data_atualizacao' => '2025-01-10 10:00:00'
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'produto_id' => 100,
                'preco_base' => 2499.90,
                'preco_promocional' => 2199.90,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-10 10:00:00'
            ],
            [
                'produto_id' => 101,
                'preco_base' => 1899.00,
                'preco_promocional' => 1699.00,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-11 14:30:00'
            ],
            [
                'produto_id' => 102,
                'preco_base' => 499.90,
                'preco_promocional' => 399.90,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-12 09:15:00'
            ],
            [
                'produto_id' => 103,
                'preco_base' => 3999.00,
                'preco_promocional' => 3499.00,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-13 16:45:00'
            ],
            [
                'produto_id' => 104,
                'preco_base' => 799.90,
                'preco_promocional' => 699.90,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-14 11:20:00'
            ],
            [
                'produto_id' => 105,
                'preco_base' => 5499.00,
                'preco_promocional' => 4999.00,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-15 13:50:00'
            ],
            [
                'produto_id' => 106,
                'preco_base' => 149.90,
                'preco_promocional' => 129.90,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-16 08:30:00'
            ],
            [
                'produto_id' => 107,
                'preco_base' => 1299.00,
                'preco_promocional' => 1099.00,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-17 15:10:00'
            ],
            [
                'produto_id' => 108,
                'preco_base' => 899.90,
                'preco_promocional' => 799.90,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-18 12:00:00'
            ],
            [
                'produto_id' => 109,
                'preco_base' => 6999.00,
                'preco_promocional' => 6499.00,
                'moeda' => 'BRL',
                'data_atualizacao' => '2025-01-19 17:25:00'
            ]
        ];
    }
}