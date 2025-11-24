<?php

class ProdutoPesquisaHomeMockup
{
    public static function pesquisarDados(): array
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
}
