<?php

class ProdutoPesquisaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'termo' => 'smartphone',
            'filtros' => ['categoria_id' => 1, 'preco_max' => 3000],
            'ordenacao' => 'relevancia',
            'total_resultados' => 124,
            'data_busca' => '2025-01-12 09:15:00'
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'termo' => 'smartphone',
                'filtros' => ['categoria_id' => 1, 'preco_max' => 3000],
                'ordenacao' => 'relevancia',
                'total_resultados' => 124,
                'data_busca' => '2025-01-12 09:15:00'
            ],
            [
                'id' => 2,
                'termo' => 'notebook gamer',
                'filtros' => ['categoria_id' => 2, 'preco_min' => 4000, 'preco_max' => 8000],
                'ordenacao' => 'preco_crescente',
                'total_resultados' => 45,
                'data_busca' => '2025-01-13 14:30:00'
            ],
            [
                'id' => 3,
                'termo' => 'fone bluetooth',
                'filtros' => ['marca' => 'TechMaster', 'desconto' => true],
                'ordenacao' => 'mais_vendidos',
                'total_resultados' => 89,
                'data_busca' => '2025-01-14 10:45:00'
            ],
            [
                'id' => 4,
                'termo' => 'televisão 50 polegadas',
                'filtros' => ['categoria_id' => 3, 'frete_gratis' => true],
                'ordenacao' => 'preco_decrescente',
                'total_resultados' => 67,
                'data_busca' => '2025-01-15 16:20:00'
            ],
            [
                'id' => 5,
                'termo' => 'cadeira gamer',
                'filtros' => ['categoria_id' => 5, 'cor' => 'preto'],
                'ordenacao' => 'avaliacao',
                'total_resultados' => 32,
                'data_busca' => '2025-01-16 11:00:00'
            ],
            [
                'id' => 6,
                'termo' => 'smartwatch',
                'filtros' => ['preco_max' => 1500, 'avaliacao_min' => 4],
                'ordenacao' => 'lancamento',
                'total_resultados' => 78,
                'data_busca' => '2025-01-17 13:35:00'
            ],
            [
                'id' => 7,
                'termo' => 'mouse sem fio',
                'filtros' => ['categoria_id' => 4, 'marca' => 'GameZone'],
                'ordenacao' => 'relevancia',
                'total_resultados' => 156,
                'data_busca' => '2025-01-18 08:50:00'
            ],
            [
                'id' => 8,
                'termo' => 'caixa de som portátil',
                'filtros' => ['preco_max' => 500, 'bluetooth' => true],
                'ordenacao' => 'preco_crescente',
                'total_resultados' => 201,
                'data_busca' => '2025-01-19 15:15:00'
            ],
            [
                'id' => 9,
                'termo' => 'tablet',
                'filtros' => ['categoria_id' => 1, 'tela_min' => 10],
                'ordenacao' => 'desconto',
                'total_resultados' => 54,
                'data_busca' => '2025-01-20 12:40:00'
            ],
            [
                'id' => 10,
                'termo' => 'console',
                'filtros' => ['marca' => 'GameZone', 'em_estoque' => true],
                'ordenacao' => 'mais_vendidos',
                'total_resultados' => 18,
                'data_busca' => '2025-01-21 17:25:00'
            ]
        ];
    }
}