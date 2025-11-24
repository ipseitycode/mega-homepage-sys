<?php

class ProdutoMarcaHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'TechMaster',
            'slug' => 'techmaster',
            'descricao' => 'Fabricante líder em produtos de tecnologia e eletrônicos portáteis.',
            'pais_origem' => 'Brasil',
            'site' => 'https://techmaster.com.br'
        ];
    }
}
