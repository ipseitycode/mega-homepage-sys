<?php

class ProdutoEconomiaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'pedido_id' => 5001,
            'valor_total' => 299.90,
            'origem' => ['desconto' => 200.00, 'cupom' => 49.90, 'cashback' => 50.00],
            'data_registro' => '2025-01-15 14:30:00'
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'pedido_id' => 5001,
                'valor_total' => 299.90,
                'origem' => ['desconto' => 200.00, 'cupom' => 49.90, 'cashback' => 50.00],
                'data_registro' => '2025-01-15 14:30:00'
            ],
            [
                'id' => 2,
                'pedido_id' => 5002,
                'valor_total' => 450.50,
                'origem' => ['desconto' => 150.00, 'cupom' => 100.50, 'cashback' => 200.00],
                'data_registro' => '2025-01-16 10:15:00'
            ],
            [
                'id' => 3,
                'pedido_id' => 5003,
                'valor_total' => 189.99,
                'origem' => ['desconto' => 89.99, 'cupom' => 50.00, 'cashback' => 50.00],
                'data_registro' => '2025-01-17 16:45:00'
            ],
            [
                'id' => 4,
                'pedido_id' => 5004,
                'valor_total' => 750.00,
                'origem' => ['desconto' => 500.00, 'cupom' => 150.00, 'cashback' => 100.00],
                'data_registro' => '2025-01-18 09:20:00'
            ],
            [
                'id' => 5,
                'pedido_id' => 5005,
                'valor_total' => 125.75,
                'origem' => ['desconto' => 50.00, 'cupom' => 25.75, 'cashback' => 50.00],
                'data_registro' => '2025-01-19 13:55:00'
            ],
            [
                'id' => 6,
                'pedido_id' => 5006,
                'valor_total' => 680.30,
                'origem' => ['desconto' => 320.00, 'cupom' => 180.30, 'cashback' => 180.00],
                'data_registro' => '2025-01-20 11:40:00'
            ],
            [
                'id' => 7,
                'pedido_id' => 5007,
                'valor_total' => 99.90,
                'origem' => ['desconto' => 30.00, 'cupom' => 19.90, 'cashback' => 50.00],
                'data_registro' => '2025-01-21 15:10:00'
            ],
            [
                'id' => 8,
                'pedido_id' => 5008,
                'valor_total' => 550.00,
                'origem' => ['desconto' => 250.00, 'cupom' => 150.00, 'cashback' => 150.00],
                'data_registro' => '2025-01-22 08:30:00'
            ],
            [
                'id' => 9,
                'pedido_id' => 5009,
                'valor_total' => 380.40,
                'origem' => ['desconto' => 180.00, 'cupom' => 100.40, 'cashback' => 100.00],
                'data_registro' => '2025-01-23 12:25:00'
            ],
            [
                'id' => 10,
                'pedido_id' => 5010,
                'valor_total' => 220.80,
                'origem' => ['desconto' => 100.00, 'cupom' => 70.80, 'cashback' => 50.00],
                'data_registro' => '2025-01-24 17:50:00'
            ]
        ];
    }
}
