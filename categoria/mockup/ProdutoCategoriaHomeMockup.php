<?php

class ProdutoCategoriaHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'Eletrônicos',
            'slug' => 'eletronicos',
            'descricao' => 'Produtos tecnológicos e dispositivos eletrônicos para o dia a dia.',
            'icone' => 'icon-eletronicos.png',
            'data_criacao' => '2025-01-05 10:00:00',
            'ativo' => true
        ];
    }
}
