<?php

class ProdutoSubcategoriaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'categoria_id' => 1,
            'nome' => 'Celulares e Smartphones',
            'slug' => 'celulares-e-smartphones',
            'descricao' => 'Smartphones de diversas marcas e modelos com garantia nacional.',
            'data_criacao' => '2025-01-06 09:00:00',
            'ativo' => true
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'categoria_id' => 1,
                'nome' => 'Celulares e Smartphones',
                'slug' => 'celulares-e-smartphones',
                'descricao' => 'Smartphones de diversas marcas e modelos com garantia nacional.',
                'data_criacao' => '2025-01-06 09:00:00',
                'ativo' => true
            ],
            [
                'id' => 2,
                'categoria_id' => 1,
                'nome' => 'Notebooks e Computadores',
                'slug' => 'notebooks-e-computadores',
                'descricao' => 'Notebooks, desktops e acessórios para trabalho e entretenimento.',
                'data_criacao' => '2025-01-06 09:15:00',
                'ativo' => true
            ],
            [
                'id' => 3,
                'categoria_id' => 2,
                'nome' => 'Tablets e E-readers',
                'slug' => 'tablets-e-ereaders',
                'descricao' => 'Tablets e leitores digitais para leitura e produtividade.',
                'data_criacao' => '2025-01-06 09:30:00',
                'ativo' => true
            ],
            [
                'id' => 4,
                'categoria_id' => 3,
                'nome' => 'Periféricos e Acessórios',
                'slug' => 'perifericos-e-acessorios',
                'descricao' => 'Mouses, teclados, webcams e outros periféricos.',
                'data_criacao' => '2025-01-06 09:45:00',
                'ativo' => true
            ],
            [
                'id' => 5,
                'categoria_id' => 4,
                'nome' => 'Áudio e Fones de Ouvido',
                'slug' => 'audio-e-fones-de-ouvido',
                'descricao' => 'Fones, caixas de som e equipamentos de áudio premium.',
                'data_criacao' => '2025-01-06 10:00:00',
                'ativo' => true
            ],
            [
                'id' => 6,
                'categoria_id' => 5,
                'nome' => 'TVs e Home Theater',
                'slug' => 'tvs-e-home-theater',
                'descricao' => 'Televisores Smart TV, projetores e sistemas de som.',
                'data_criacao' => '2025-01-06 10:15:00',
                'ativo' => false
            ],
            [
                'id' => 7,
                'categoria_id' => 6,
                'nome' => 'Games e Consoles',
                'slug' => 'games-e-consoles',
                'descricao' => 'Consoles de última geração, jogos e acessórios gamer.',
                'data_criacao' => '2025-01-06 10:30:00',
                'ativo' => true
            ],
            [
                'id' => 8,
                'categoria_id' => 7,
                'nome' => 'Câmeras e Filmadoras',
                'slug' => 'cameras-e-filmadoras',
                'descricao' => 'Equipamentos fotográficos profissionais e semi-profissionais.',
                'data_criacao' => '2025-01-06 10:45:00',
                'ativo' => true
            ],
            [
                'id' => 9,
                'categoria_id' => 8,
                'nome' => 'Smartwatches e Wearables',
                'slug' => 'smartwatches-e-wearables',
                'descricao' => 'Relógios inteligentes e dispositivos vestíveis.',
                'data_criacao' => '2025-01-06 11:00:00',
                'ativo' => true
            ],
            [
                'id' => 10,
                'categoria_id' => 9,
                'nome' => 'Drones e Acessórios',
                'slug' => 'drones-e-acessorios',
                'descricao' => 'Drones profissionais, recreativos e peças de reposição.',
                'data_criacao' => '2025-01-06 11:15:00',
                'ativo' => true
            ]
        ];
    }
}