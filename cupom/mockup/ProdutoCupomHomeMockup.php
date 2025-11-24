<?php

class ProdutoCupomHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'codigo' => 'BEMVINDO10',
            'descricao' => '10% de desconto na primeira compra.',
            'tipo' => 'porcentagem',
            'valor' => 10,
            'uso_maximo' => 1,
            'data_expiracao' => '2025-12-31',
            'ativo' => true
        ];
    }
}
