<?php

class ProdutoParcelaHomeMockup
{
    public static function pesquisarDados(): array
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
}
