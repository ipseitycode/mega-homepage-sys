<?php

class ProdutoCashbackHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'Cashback de Boas-Vindas',
            'descricao' => 'Receba 5% de volta na sua primeira compra de vinil.',
            'data_criacao' => '2025-01-10 09:00:00',
            'data_expiracao' => '2025-12-31 23:59:59',
            'publicar' => true,
            'categoria_id' => 2,
            'loja_id' => 1
        ];
    }
}
