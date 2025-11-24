<?php

class ProdutoLancamentoHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'nome' => 'Fone de Ouvido Bluetooth SoundPro X100',
            'descricao_curta' => 'Fone sem fio com cancelamento de ruído ativo.',
            'data_lancamento' => '2025-01-10 09:00:00',
            'data_disponibilidade' => '2025-01-15 00:00:00',
            'estoque_inicial' => 200,
            'preco_lancamento' => 499.90,
            'ativo' => true
        ];
    }
}
