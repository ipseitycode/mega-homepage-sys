<?php

class ProdutoPagamentoHomeMockup
{
    public static function retornarItem(): array
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

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'metodo' => 'Cartão de Crédito',
                'bandeiras_aceitas' => ['Visa', 'Mastercard', 'Elo', 'Amex'],
                'parcelas_max' => 10,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 2,
                'metodo' => 'Cartão de Débito',
                'bandeiras_aceitas' => ['Visa', 'Mastercard', 'Elo'],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 3,
                'metodo' => 'PIX',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 4,
                'metodo' => 'Boleto Bancário',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 5,
                'metodo' => 'Transferência Bancária',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => false
            ],
            [
                'id' => 6,
                'metodo' => 'Cartão de Crédito Parcelado',
                'bandeiras_aceitas' => ['Visa', 'Mastercard', 'Elo'],
                'parcelas_max' => 12,
                'juros' => 2.5,
                'ativo' => true
            ],
            [
                'id' => 7,
                'metodo' => 'PayPal',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 8,
                'metodo' => 'Carteira Digital',
                'bandeiras_aceitas' => ['PicPay', 'Mercado Pago', 'PagSeguro'],
                'parcelas_max' => 3,
                'juros' => 0.0,
                'ativo' => true
            ],
            [
                'id' => 9,
                'metodo' => 'Vale Presente',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 1,
                'juros' => 0.0,
                'ativo' => false
            ],
            [
                'id' => 10,
                'metodo' => 'Crediário Próprio',
                'bandeiras_aceitas' => [],
                'parcelas_max' => 6,
                'juros' => 1.5,
                'ativo' => true
            ]
        ];
    }
}