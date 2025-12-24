<?php

class ProdutoParcelaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'pedido_id' => 5001,
            'numero_parcela' => 1,
            'valor' => 219.99,
            'data_vencimento' => '2025-02-15',
            'status' => 'pago'
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'pedido_id' => 5001,
                'numero_parcela' => 1,
                'valor' => 219.99,
                'data_vencimento' => '2025-02-15',
                'status' => 'pago'
            ],
            [
                'id' => 2,
                'pedido_id' => 5001,
                'numero_parcela' => 2,
                'valor' => 219.99,
                'data_vencimento' => '2025-03-15',
                'status' => 'pendente'
            ],
            [
                'id' => 3,
                'pedido_id' => 5002,
                'numero_parcela' => 1,
                'valor' => 150.00,
                'data_vencimento' => '2025-01-20',
                'status' => 'pago'
            ],
            [
                'id' => 4,
                'pedido_id' => 5003,
                'numero_parcela' => 1,
                'valor' => 89.90,
                'data_vencimento' => '2025-02-10',
                'status' => 'atrasado'
            ],
            [
                'id' => 5,
                'pedido_id' => 5004,
                'numero_parcela' => 1,
                'valor' => 450.00,
                'data_vencimento' => '2025-03-01',
                'status' => 'pendente'
            ],
            [
                'id' => 6,
                'pedido_id' => 5004,
                'numero_parcela' => 2,
                'valor' => 450.00,
                'data_vencimento' => '2025-04-01',
                'status' => 'pendente'
            ],
            [
                'id' => 7,
                'pedido_id' => 5005,
                'numero_parcela' => 1,
                'valor' => 320.50,
                'data_vencimento' => '2025-01-25',
                'status' => 'pago'
            ],
            [
                'id' => 8,
                'pedido_id' => 5006,
                'numero_parcela' => 1,
                'valor' => 99.99,
                'data_vencimento' => '2025-02-05',
                'status' => 'cancelado'
            ],
            [
                'id' => 9,
                'pedido_id' => 5007,
                'numero_parcela' => 1,
                'valor' => 275.00,
                'data_vencimento' => '2025-03-10',
                'status' => 'pendente'
            ],
            [
                'id' => 10,
                'pedido_id' => 5008,
                'numero_parcela' => 1,
                'valor' => 180.00,
                'data_vencimento' => '2025-01-30',
                'status' => 'pago'
            ]
        ];
    }
}