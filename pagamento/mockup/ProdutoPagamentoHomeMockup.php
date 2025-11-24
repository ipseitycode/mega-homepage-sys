<?php

class ProdutoPagamentoHomeMockup
{
    public static function pesquisarDados(): array
    {
        return [
            'id' => 1,
            'metodo' => 'Cartão de Crédito',
            'bandeiras_aceitas' => ['Visa', 'Mastercard', 'Elo', 'Amex'],
            'parcelas_max' => 10,
            'juros' => 0.0,
            'ativo' => true
        ];
    }
}
