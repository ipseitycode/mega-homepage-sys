<?php

class ProdutoOfertaHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'titulo' => 'Semana do Consumidor',
            'descricao' => 'Descontos especiais em smartphones e notebooks.',
            'tipo' => 'desconto',
            'valor' => 15, // 15%
            'data_inicio' => '2025-03-10',
            'data_fim' => '2025-03-17',
            'ativo' => true
        ];
    }
}
