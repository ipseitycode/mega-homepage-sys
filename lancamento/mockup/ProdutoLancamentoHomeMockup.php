<?php

class ProdutoLancamentoHomeMockup
{
    public static function retornarItem(): array
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

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'Fone de Ouvido Bluetooth SoundPro X100',
                'descricao_curta' => 'Fone sem fio com cancelamento de ruído ativo.',
                'data_lancamento' => '2025-01-10 09:00:00',
                'data_disponibilidade' => '2025-01-15 00:00:00',
                'estoque_inicial' => 200,
                'preco_lancamento' => 499.90,
                'ativo' => true
            ],
            [
                'id' => 2,
                'nome' => 'Smartwatch Fitness Pro 5',
                'descricao_curta' => 'Relógio inteligente com monitoramento de saúde completo.',
                'data_lancamento' => '2025-02-01 10:00:00',
                'data_disponibilidade' => '2025-02-05 00:00:00',
                'estoque_inicial' => 150,
                'preco_lancamento' => 899.90,
                'ativo' => true
            ],
            [
                'id' => 3,
                'nome' => 'Notebook UltraSlim 14 Pro',
                'descricao_curta' => 'Notebook ultrafino com processador de última geração.',
                'data_lancamento' => '2025-03-10 08:00:00',
                'data_disponibilidade' => '2025-03-15 00:00:00',
                'estoque_inicial' => 80,
                'preco_lancamento' => 3499.00,
                'ativo' => false
            ],
            [
                'id' => 4,
                'nome' => 'Câmera Mirrorless Vision 4K',
                'descricao_curta' => 'Câmera profissional com gravação em 4K 60fps.',
                'data_lancamento' => '2025-01-20 11:00:00',
                'data_disponibilidade' => '2025-01-25 00:00:00',
                'estoque_inicial' => 50,
                'preco_lancamento' => 5999.00,
                'ativo' => true
            ],
            [
                'id' => 5,
                'nome' => 'Console GameStation Pro Max',
                'descricao_curta' => 'Console de videogame de nova geração com 2TB.',
                'data_lancamento' => '2025-04-01 12:00:00',
                'data_disponibilidade' => '2025-04-10 00:00:00',
                'estoque_inicial' => 300,
                'preco_lancamento' => 4299.90,
                'ativo' => true
            ],
            [
                'id' => 6,
                'nome' => 'Tablet GraphicPad Ultra 12',
                'descricao_curta' => 'Tablet para design profissional com caneta sensível.',
                'data_lancamento' => '2025-02-15 09:30:00',
                'data_disponibilidade' => '2025-02-20 00:00:00',
                'estoque_inicial' => 120,
                'preco_lancamento' => 2899.00,
                'ativo' => true
            ],
            [
                'id' => 7,
                'nome' => 'Caixa de Som Portátil BassMax 360',
                'descricao_curta' => 'Som 360 graus à prova d\'água com 20h de bateria.',
                'data_lancamento' => '2025-01-05 14:00:00',
                'data_disponibilidade' => '2025-01-08 00:00:00',
                'estoque_inicial' => 250,
                'preco_lancamento' => 699.90,
                'ativo' => false
            ],
            [
                'id' => 8,
                'nome' => 'Drone AeroView Pro 4K',
                'descricao_curta' => 'Drone com câmera 4K e alcance de 8km.',
                'data_lancamento' => '2025-03-01 10:30:00',
                'data_disponibilidade' => '2025-03-05 00:00:00',
                'estoque_inicial' => 60,
                'preco_lancamento' => 3799.00,
                'ativo' => true
            ],
            [
                'id' => 9,
                'nome' => 'Mouse Gamer RGB HyperClick Pro',
                'descricao_curta' => 'Mouse ergonômico com 16.000 DPI e RGB customizável.',
                'data_lancamento' => '2025-01-18 15:00:00',
                'data_disponibilidade' => '2025-01-20 00:00:00',
                'estoque_inicial' => 400,
                'preco_lancamento' => 349.90,
                'ativo' => true
            ],
            [
                'id' => 10,
                'nome' => 'Carregador Wireless FastCharge 3',
                'descricao_curta' => 'Carregador sem fio com carga rápida 30W.',
                'data_lancamento' => '2025-02-10 13:00:00',
                'data_disponibilidade' => '2025-02-12 00:00:00',
                'estoque_inicial' => 500,
                'preco_lancamento' => 199.90,
                'ativo' => true
            ]
        ];
    }
}
