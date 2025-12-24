<?php

class ProdutoCategoriaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'nome' => 'Eletrônicos',
            'slug' => 'eletronicos',
            'descricao' => 'Produtos tecnológicos e dispositivos eletrônicos para o dia a dia.',
            'icone' => 'icon-eletronicos.png',
            'data_criacao' => '2025-01-05 10:00:00',
            'ativo' => true
        ];
    } 

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'Eletrônicos',
                'slug' => 'eletronicos',
                'descricao' => 'Produtos tecnológicos e dispositivos eletrônicos para o dia a dia.',
                'icone' => 'icon-eletronicos.png',
                'data_criacao' => '2025-01-05 10:00:00',
                'ativo' => true
            ],
            [
                'id' => 2,
                'nome' => 'Moda e Vestuário',
                'slug' => 'moda-vestuario',
                'descricao' => 'Roupas, calçados e acessórios para todas as ocasiões.',
                'icone' => 'icon-moda.png',
                'data_criacao' => '2025-01-05 10:15:00',
                'ativo' => true
            ],
            [
                'id' => 3,
                'nome' => 'Casa e Decoração',
                'slug' => 'casa-decoracao',
                'descricao' => 'Móveis, decoração e itens para transformar sua casa.',
                'icone' => 'icon-casa.png',
                'data_criacao' => '2025-01-05 10:30:00',
                'ativo' => true
            ],
            [
                'id' => 4,
                'nome' => 'Esportes e Lazer',
                'slug' => 'esportes-lazer',
                'descricao' => 'Equipamentos esportivos e artigos para recreação.',
                'icone' => 'icon-esportes.png',
                'data_criacao' => '2025-01-05 10:45:00',
                'ativo' => true
            ],
            [
                'id' => 5,
                'nome' => 'Livros e Papelaria',
                'slug' => 'livros-papelaria',
                'descricao' => 'Livros, material escolar e produtos de papelaria.',
                'icone' => 'icon-livros.png',
                'data_criacao' => '2025-01-05 11:00:00',
                'ativo' => true
            ],
            [
                'id' => 6,
                'nome' => 'Beleza e Cuidados',
                'slug' => 'beleza-cuidados',
                'descricao' => 'Cosméticos, perfumes e produtos de cuidados pessoais.',
                'icone' => 'icon-beleza.png',
                'data_criacao' => '2025-01-05 11:15:00',
                'ativo' => true
            ],
            [
                'id' => 7,
                'nome' => 'Alimentos e Bebidas',
                'slug' => 'alimentos-bebidas',
                'descricao' => 'Produtos alimentícios, bebidas e itens gourmet.',
                'icone' => 'icon-alimentos.png',
                'data_criacao' => '2025-01-05 11:30:00',
                'ativo' => true
            ],
            [
                'id' => 8,
                'nome' => 'Brinquedos e Games',
                'slug' => 'brinquedos-games',
                'descricao' => 'Jogos, brinquedos e entretenimento para todas as idades.',
                'icone' => 'icon-games.png',
                'data_criacao' => '2025-01-05 11:45:00',
                'ativo' => true
            ],
            [
                'id' => 9,
                'nome' => 'Automotivo',
                'slug' => 'automotivo',
                'descricao' => 'Peças, acessórios e produtos para veículos.',
                'icone' => 'icon-automotivo.png',
                'data_criacao' => '2025-01-05 12:00:00',
                'ativo' => true
            ],
            [
                'id' => 10,
                'nome' => 'Pet Shop',
                'slug' => 'pet-shop',
                'descricao' => 'Produtos e acessórios para seus animais de estimação.',
                'icone' => 'icon-pet.png',
                'data_criacao' => '2025-01-05 12:15:00',
                'ativo' => true
            ]
        ];
    }
}
