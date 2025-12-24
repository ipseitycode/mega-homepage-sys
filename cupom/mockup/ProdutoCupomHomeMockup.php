<?php

class ProdutoCupomHomeMockup
{
    public static function retornarItem(): array
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

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'codigo' => 'BEMVINDO10',
                'descricao' => '10% de desconto na primeira compra.',
                'tipo' => 'porcentagem',
                'valor' => 10,
                'uso_maximo' => 1,
                'data_expiracao' => '2025-12-31',
                'ativo' => true
            ],
            [
                'id' => 2,
                'codigo' => 'VERAO2025',
                'descricao' => 'R$ 50 de desconto em compras acima de R$ 200.',
                'tipo' => 'fixo',
                'valor' => 50,
                'uso_maximo' => 100,
                'data_expiracao' => '2025-03-31',
                'ativo' => true
            ],
            [
                'id' => 3,
                'codigo' => 'FRETEGRATIS',
                'descricao' => 'Frete grátis para todo o Brasil.',
                'tipo' => 'frete',
                'valor' => 0,
                'uso_maximo' => 500,
                'data_expiracao' => '2025-06-30',
                'ativo' => true
            ],
            [
                'id' => 4,
                'codigo' => 'BLACK50',
                'descricao' => '50% de desconto em produtos selecionados.',
                'tipo' => 'porcentagem',
                'valor' => 50,
                'uso_maximo' => 200,
                'data_expiracao' => '2025-11-30',
                'ativo' => false
            ],
            [
                'id' => 5,
                'codigo' => 'NATAL100',
                'descricao' => 'R$ 100 de desconto em compras acima de R$ 500.',
                'tipo' => 'fixo',
                'valor' => 100,
                'uso_maximo' => 50,
                'data_expiracao' => '2025-12-25',
                'ativo' => true
            ],
            [
                'id' => 6,
                'codigo' => 'CLIENTE15',
                'descricao' => '15% de desconto para clientes cadastrados.',
                'tipo' => 'porcentagem',
                'valor' => 15,
                'uso_maximo' => 1000,
                'data_expiracao' => '2026-01-31',
                'ativo' => true
            ],
            [
                'id' => 7,
                'codigo' => 'PRIMEIRACOMPRA',
                'descricao' => 'R$ 30 de desconto na sua primeira compra.',
                'tipo' => 'fixo',
                'valor' => 30,
                'uso_maximo' => 1,
                'data_expiracao' => '2025-12-31',
                'ativo' => false
            ],
            [
                'id' => 8,
                'codigo' => 'MAES20',
                'descricao' => '20% de desconto especial Dia das Mães.',
                'tipo' => 'porcentagem',
                'valor' => 20,
                'uso_maximo' => 300,
                'data_expiracao' => '2025-05-15',
                'ativo' => true
            ],
            [
                'id' => 9,
                'codigo' => 'VOLTAASAULAS',
                'descricao' => 'R$ 25 de desconto em material escolar.',
                'tipo' => 'fixo',
                'valor' => 25,
                'uso_maximo' => 150,
                'data_expiracao' => '2025-02-28',
                'ativo' => true
            ],
            [
                'id' => 10,
                'codigo' => 'VIP30',
                'descricao' => '30% de desconto exclusivo para clientes VIP.',
                'tipo' => 'porcentagem',
                'valor' => 30,
                'uso_maximo' => 5,
                'data_expiracao' => '2025-12-31',
                'ativo' => false
            ]
        ];
    }
}