<?php

class ProdutoColecaoHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'Coleção Verão 2025',
            'descricao' => 'Conjunto de produtos em promoção para o verão 2025.',
            'tema' => 'Verão e Tecnologia',
            'data_inicio' => '2025-01-01',
            'data_fim' => '2025-03-31',
            'publicar' => true
        ];
    }
}
