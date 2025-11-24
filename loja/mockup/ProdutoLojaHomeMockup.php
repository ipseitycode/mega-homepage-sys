<?php

class ProdutoLojaHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'EletroPrime Store',
            'slug' => 'eletroprime-store',
            'descricao' => 'Loja oficial especializada em eletrônicos e tecnologia de ponta.',
            'cnpj' => '23.456.789/0001-11',
            'email' => 'contato@eletroprime.com.br',
            'telefone' => '(11) 4002-8922',
            'endereco' => 'Av. das Nações, 1500 - São Paulo/SP',
            'data_cadastro' => '2025-01-03 10:30:00',
            'ativo' => true
        ];
    }
}
