<?php

class ProdutoCashbackHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'nome' => 'Cashback de Boas-Vindas',
            'descricao' => 'Receba 5% de volta na sua primeira compra de vinil.',
            'data_criacao' => '2025-01-10 09:00:00',
            'data_expiracao' => '2025-12-31 23:59:59',
            'publicar' => true,
            'categoria_id' => 2,
            'loja_id' => 1
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'Cashback de Boas-Vindas',
                'descricao' => 'Receba 5% de volta na sua primeira compra de vinil.',
                'data_criacao' => '2025-01-10 09:00:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => true,
                'categoria_id' => 2,
                'loja_id' => 1
            ],
            [
                'id' => 2,
                'nome' => 'Cashback VIP',
                'descricao' => 'Clientes VIP recebem 10% de cashback em todas as compras.',
                'data_criacao' => '2025-01-15 10:30:00',
                'data_expiracao' => '2025-06-30 23:59:59',
                'publicar' => true,
                'categoria_id' => 1,
                'loja_id' => 1
            ],
            [
                'id' => 3,
                'nome' => 'Cashback Black Friday',
                'descricao' => 'Ganhe 15% de volta em compras acima de R$ 500 durante a Black Friday.',
                'data_criacao' => '2025-01-20 08:00:00',
                'data_expiracao' => '2025-11-30 23:59:59',
                'publicar' => true,
                'categoria_id' => 3,
                'loja_id' => 2
            ],
            [
                'id' => 4,
                'nome' => 'Cashback Aniversário',
                'descricao' => 'No mês do seu aniversário, receba 20% de cashback.',
                'data_criacao' => '2025-02-01 09:15:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => true,
                'categoria_id' => 2,
                'loja_id' => 1
            ],
            [
                'id' => 5,
                'nome' => 'Cashback Fin de Semana',
                'descricao' => 'Todo sábado e domingo, ganhe 7% de volta em suas compras.',
                'data_criacao' => '2025-02-10 07:00:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => false,
                'categoria_id' => 4,
                'loja_id' => 3
            ],
            [
                'id' => 6,
                'nome' => 'Cashback Indicação',
                'descricao' => 'Indique um amigo e ganhe 8% de cashback na próxima compra.',
                'data_criacao' => '2025-02-15 11:00:00',
                'data_expiracao' => '2025-08-31 23:59:59',
                'publicar' => true,
                'categoria_id' => 1,
                'loja_id' => 2
            ],
            [
                'id' => 7,
                'nome' => 'Cashback Natal',
                'descricao' => 'Especial de Natal: 12% de cashback em produtos selecionados.',
                'data_criacao' => '2025-03-01 06:00:00',
                'data_expiracao' => '2025-12-25 23:59:59',
                'publicar' => true,
                'categoria_id' => 3,
                'loja_id' => 1
            ],
            [
                'id' => 8,
                'nome' => 'Cashback App',
                'descricao' => 'Compre pelo aplicativo e receba 6% de volta.',
                'data_criacao' => '2025-03-10 10:00:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => true,
                'categoria_id' => 2,
                'loja_id' => 3
            ],
            [
                'id' => 9,
                'nome' => 'Cashback Madrugada',
                'descricao' => 'Compras entre 00h e 06h ganham 9% de cashback extra.',
                'data_criacao' => '2025-03-20 00:00:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => false,
                'categoria_id' => 4,
                'loja_id' => 2
            ],
            [
                'id' => 10,
                'nome' => 'Cashback Premium',
                'descricao' => 'Para compras acima de R$ 1000, receba 18% de cashback.',
                'data_criacao' => '2025-04-01 12:00:00',
                'data_expiracao' => '2025-12-31 23:59:59',
                'publicar' => true,
                'categoria_id' => 1,
                'loja_id' => 1
            ]
        ];
    }
}
