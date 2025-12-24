<?php

class ProdutoOfertaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'titulo' => 'Semana do Consumidor',
            'descricao' => 'Descontos especiais em smartphones e notebooks.',
            'tipo' => 'desconto',
            'valor' => 15, 
            'data_inicio' => '2025-03-10',
            'data_fim' => '2025-03-17',
            'ativo' => true
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'titulo' => 'Semana do Consumidor',
                'descricao' => 'Descontos especiais em smartphones e notebooks.',
                'tipo' => 'desconto',
                'valor' => 15,
                'data_inicio' => '2025-03-10',
                'data_fim' => '2025-03-17',
                'ativo' => true
            ],
            [
                'id' => 2,
                'titulo' => 'Black Friday 2025',
                'descricao' => 'Até 70% OFF em eletrônicos e moda.',
                'tipo' => 'desconto',
                'valor' => 70,
                'data_inicio' => '2025-11-28',
                'data_fim' => '2025-11-30',
                'ativo' => true
            ],
            [
                'id' => 3,
                'titulo' => 'Frete Grátis Verão',
                'descricao' => 'Frete grátis para todo o Brasil em compras acima de R$ 99.',
                'tipo' => 'frete_gratis',
                'valor' => 0,
                'data_inicio' => '2025-01-01',
                'data_fim' => '2025-03-31',
                'ativo' => true
            ],
            [
                'id' => 4,
                'titulo' => 'Natal Premiado',
                'descricao' => 'Concorra a prêmios em compras acima de R$ 300.',
                'tipo' => 'sorteio',
                'valor' => 0,
                'data_inicio' => '2025-12-01',
                'data_fim' => '2025-12-25',
                'ativo' => false
            ],
            [
                'id' => 5,
                'titulo' => 'Cashback Dobrado',
                'descricao' => 'Ganhe 10% de cashback em todas as compras.',
                'tipo' => 'cashback',
                'valor' => 10,
                'data_inicio' => '2025-02-01',
                'data_fim' => '2025-02-28',
                'ativo' => true
            ],
            [
                'id' => 6,
                'titulo' => 'Dia das Mães',
                'descricao' => '25% OFF em cosméticos e perfumes.',
                'tipo' => 'desconto',
                'valor' => 25,
                'data_inicio' => '2025-05-05',
                'data_fim' => '2025-05-12',
                'ativo' => true
            ],
            [
                'id' => 7,
                'titulo' => 'Cyber Monday',
                'descricao' => 'Ofertas relâmpago em tecnologia a cada hora.',
                'tipo' => 'desconto',
                'valor' => 40,
                'data_inicio' => '2025-12-01',
                'data_fim' => '2025-12-01',
                'ativo' => true
            ],
            [
                'id' => 8,
                'titulo' => 'Aniversário da Loja',
                'descricao' => 'Cupom de R$ 50 para compras acima de R$ 250.',
                'tipo' => 'cupom',
                'valor' => 50,
                'data_inicio' => '2025-06-15',
                'data_fim' => '2025-06-20',
                'ativo' => false
            ],
            [
                'id' => 9,
                'titulo' => 'Volta às Aulas',
                'descricao' => '20% em livros, mochilas e materiais escolares.',
                'tipo' => 'desconto',
                'valor' => 20,
                'data_inicio' => '2025-01-20',
                'data_fim' => '2025-02-15',
                'ativo' => true
            ],
            [
                'id' => 10,
                'titulo' => 'Liquidação de Inverno',
                'descricao' => 'Descontos progressivos: compre mais, pague menos.',
                'tipo' => 'desconto',
                'valor' => 30,
                'data_inicio' => '2025-07-01',
                'data_fim' => '2025-07-31',
                'ativo' => true
            ]
        ];
    }
}
