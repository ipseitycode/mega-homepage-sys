<?php

class ProdutoFreteHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'tipo' => 'Sedex',
            'prazo_min_dias' => 2,
            'prazo_max_dias' => 5,
            'valor' => 24.90,
            'frete_gratis_acima' => 300.00,
            'transportadora' => 'Correios'
        ];
    }
}
