<?php

class ProdutoDescontoHomeMockup
{
    public static function pesquisarDados(): array
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
}
