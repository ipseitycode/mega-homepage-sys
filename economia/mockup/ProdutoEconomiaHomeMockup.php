<?php

class ProdutoEconomiaHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'pedido_id' => 5001,
            'valor_total' => 299.90,
            'origem' => ['desconto' => 200.00, 'cupom' => 49.90, 'cashback' => 50.00],
            'data_registro' => '2025-01-15 14:30:00'
        ];
    }
}
