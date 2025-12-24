<?php

class ProdutoDescontoHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'nome' => 'Desconto de Verão',
            'tipo' => 'porcentagem',
            'valor' => 20,
            'origem' => 'campanha_sazonal',
            'data_inicio' => '2025-01-01',
            'data_fim' => '2025-01-31',
            'ativo' => true
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'Desconto de Verão',
                'tipo' => 'porcentagem',
                'valor' => 20,
                'origem' => 'campanha_sazonal',
                'data_inicio' => '2025-01-01',
                'data_fim' => '2025-01-31',
                'ativo' => true
            ],
            [
                'id' => 2,
                'nome' => 'Promoção Black Friday',
                'tipo' => 'porcentagem',
                'valor' => 50,
                'origem' => 'evento_comercial',
                'data_inicio' => '2025-11-20',
                'data_fim' => '2025-11-30',
                'ativo' => true
            ],
            [
                'id' => 3,
                'nome' => 'Cashback Fidelidade',
                'tipo' => 'fixo',
                'valor' => 30,
                'origem' => 'programa_fidelidade',
                'data_inicio' => '2025-01-01',
                'data_fim' => '2025-12-31',
                'ativo' => true
            ],
            [
                'id' => 4,
                'nome' => 'Desconto Aniversário',
                'tipo' => 'porcentagem',
                'valor' => 15,
                'origem' => 'aniversario_cliente',
                'data_inicio' => '2025-03-01',
                'data_fim' => '2025-03-31',
                'ativo' => false
            ],
            [
                'id' => 5,
                'nome' => 'Liquidação de Inverno',
                'tipo' => 'porcentagem',
                'valor' => 35,
                'origem' => 'campanha_sazonal',
                'data_inicio' => '2025-07-01',
                'data_fim' => '2025-07-31',
                'ativo' => true
            ],
            [
                'id' => 6,
                'nome' => 'Cupom Primeira Compra',
                'tipo' => 'fixo',
                'valor' => 50,
                'origem' => 'aquisicao_cliente',
                'data_inicio' => '2025-01-01',
                'data_fim' => '2025-12-31',
                'ativo' => true
            ],
            [
                'id' => 7,
                'nome' => 'Natal Solidário',
                'tipo' => 'porcentagem',
                'valor' => 25,
                'origem' => 'evento_comercial',
                'data_inicio' => '2025-12-01',
                'data_fim' => '2025-12-25',
                'ativo' => false
            ],
            [
                'id' => 8,
                'nome' => 'Desconto Dia das Mães',
                'tipo' => 'porcentagem',
                'valor' => 30,
                'origem' => 'campanha_sazonal',
                'data_inicio' => '2025-05-01',
                'data_fim' => '2025-05-15',
                'ativo' => true
            ],
            [
                'id' => 9,
                'nome' => 'Bonus Indicação',
                'tipo' => 'fixo',
                'valor' => 40,
                'origem' => 'programa_indicacao',
                'data_inicio' => '2025-02-01',
                'data_fim' => '2025-12-31',
                'ativo' => true
            ],
            [
                'id' => 10,
                'nome' => 'Super Desconto Carnaval',
                'tipo' => 'porcentagem',
                'valor' => 40,
                'origem' => 'evento_comercial',
                'data_inicio' => '2025-02-28',
                'data_fim' => '2025-03-05',
                'ativo' => false
            ]
        ];
    }
}
