<?php

class ProdutoFreteHomeMockup
{
    public static function retornarItem(): array
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

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'tipo' => 'Sedex',
                'prazo_min_dias' => 2,
                'prazo_max_dias' => 5,
                'valor' => 24.90,
                'frete_gratis_acima' => 300.00,
                'transportadora' => 'Correios'
            ],
            [
                'id' => 2,
                'tipo' => 'PAC',
                'prazo_min_dias' => 5,
                'prazo_max_dias' => 10,
                'valor' => 15.50,
                'frete_gratis_acima' => 250.00,
                'transportadora' => 'Correios'
            ],
            [
                'id' => 3,
                'tipo' => 'Expresso',
                'prazo_min_dias' => 1,
                'prazo_max_dias' => 3,
                'valor' => 35.00,
                'frete_gratis_acima' => 500.00,
                'transportadora' => 'Jadlog'
            ],
            [
                'id' => 4,
                'tipo' => 'Econômico',
                'prazo_min_dias' => 7,
                'prazo_max_dias' => 15,
                'valor' => 12.00,
                'frete_gratis_acima' => 200.00,
                'transportadora' => 'Loggi'
            ],
            [
                'id' => 5,
                'tipo' => 'Same Day',
                'prazo_min_dias' => 0,
                'prazo_max_dias' => 1,
                'valor' => 45.00,
                'frete_gratis_acima' => 800.00,
                'transportadora' => 'Rappi'
            ],
            [
                'id' => 6,
                'tipo' => 'Normal',
                'prazo_min_dias' => 5,
                'prazo_max_dias' => 8,
                'valor' => 18.90,
                'frete_gratis_acima' => 350.00,
                'transportadora' => 'Total Express'
            ],
            [
                'id' => 7,
                'tipo' => 'Premium',
                'prazo_min_dias' => 1,
                'prazo_max_dias' => 2,
                'valor' => 50.00,
                'frete_gratis_acima' => 1000.00,
                'transportadora' => 'DHL'
            ],
            [
                'id' => 8,
                'tipo' => 'Standard',
                'prazo_min_dias' => 4,
                'prazo_max_dias' => 7,
                'valor' => 20.00,
                'frete_gratis_acima' => 300.00,
                'transportadora' => 'Azul Cargo'
            ],
            [
                'id' => 9,
                'tipo' => 'Super Econômico',
                'prazo_min_dias' => 10,
                'prazo_max_dias' => 20,
                'valor' => 8.50,
                'frete_gratis_acima' => 150.00,
                'transportadora' => 'Mandaê'
            ],
            [
                'id' => 10,
                'tipo' => 'Retirada na Loja',
                'prazo_min_dias' => 0,
                'prazo_max_dias' => 0,
                'valor' => 0.00,
                'frete_gratis_acima' => 0.00,
                'transportadora' => 'Própria'
            ]
        ];
    }
}
