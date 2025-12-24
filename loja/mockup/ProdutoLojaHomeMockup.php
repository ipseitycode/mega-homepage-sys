<?php

class ProdutoLojaHomeMockup
{
    public static function retornarItem(): array
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

    public static function retornarLista(): array
    {
        return [
            [
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
            ],
            [
                'id' => 2,
                'nome' => 'ModaStyle Fashion',
                'slug' => 'modastyle-fashion',
                'descricao' => 'Moda feminina e masculina com as últimas tendências.',
                'cnpj' => '12.345.678/0001-90',
                'email' => 'vendas@modastyle.com.br',
                'telefone' => '(21) 3456-7890',
                'endereco' => 'Rua da Moda, 250 - Rio de Janeiro/RJ',
                'data_cadastro' => '2024-11-15 14:20:00',
                'ativo' => true
            ],
            [
                'id' => 3,
                'nome' => 'HomeDecor Premium',
                'slug' => 'homedecor-premium',
                'descricao' => 'Decoração e móveis para deixar sua casa ainda mais bonita.',
                'cnpj' => '34.567.890/0001-22',
                'email' => 'atendimento@homedecor.com.br',
                'telefone' => '(31) 2345-6789',
                'endereco' => 'Av. do Comércio, 800 - Belo Horizonte/MG',
                'data_cadastro' => '2024-12-01 09:15:00',
                'ativo' => true
            ],
            [
                'id' => 4,
                'nome' => 'TechGadgets Hub',
                'slug' => 'techgadgets-hub',
                'descricao' => 'Os melhores gadgets e acessórios tecnológicos do mercado.',
                'cnpj' => '45.678.901/0001-33',
                'email' => 'suporte@techgadgets.com.br',
                'telefone' => '(41) 3210-9876',
                'endereco' => 'Rua da Tecnologia, 450 - Curitiba/PR',
                'data_cadastro' => '2025-01-10 11:45:00',
                'ativo' => false
            ],
            [
                'id' => 5,
                'nome' => 'SportMax Fitness',
                'slug' => 'sportmax-fitness',
                'descricao' => 'Artigos esportivos e suplementos para atletas.',
                'cnpj' => '56.789.012/0001-44',
                'email' => 'contato@sportmax.com.br',
                'telefone' => '(51) 3344-5566',
                'endereco' => 'Av. dos Esportes, 600 - Porto Alegre/RS',
                'data_cadastro' => '2024-10-20 16:00:00',
                'ativo' => true
            ],
            [
                'id' => 6,
                'nome' => 'BeautyGlow Cosméticos',
                'slug' => 'beautyglow-cosmeticos',
                'descricao' => 'Cosméticos e produtos de beleza para todos os tipos de pele.',
                'cnpj' => '67.890.123/0001-55',
                'email' => 'sac@beautyglow.com.br',
                'telefone' => '(85) 3456-7891',
                'endereco' => 'Rua da Beleza, 120 - Fortaleza/CE',
                'data_cadastro' => '2024-09-05 13:30:00',
                'ativo' => true
            ],
            [
                'id' => 7,
                'nome' => 'PetShop Amigão',
                'slug' => 'petshop-amigao',
                'descricao' => 'Tudo para seu pet: ração, brinquedos e acessórios.',
                'cnpj' => '78.901.234/0001-66',
                'email' => 'contato@petamigao.com.br',
                'telefone' => '(71) 2234-5678',
                'endereco' => 'Rua dos Pets, 340 - Salvador/BA',
                'data_cadastro' => '2024-08-12 10:00:00',
                'ativo' => true
            ],
            [
                'id' => 8,
                'nome' => 'LivrariaLer Mais',
                'slug' => 'livrarialer-mais',
                'descricao' => 'Livros, revistas e materiais educativos para todas as idades.',
                'cnpj' => '89.012.345/0001-77',
                'email' => 'vendas@livrarialer.com.br',
                'telefone' => '(61) 3123-4567',
                'endereco' => 'Av. da Cultura, 980 - Brasília/DF',
                'data_cadastro' => '2024-07-25 08:45:00',
                'ativo' => false
            ],
            [
                'id' => 9,
                'nome' => 'GourmetFood Delivery',
                'slug' => 'gourmetfood-delivery',
                'descricao' => 'Alimentos gourmet e produtos gastronômicos especiais.',
                'cnpj' => '90.123.456/0001-88',
                'email' => 'pedidos@gourmetfood.com.br',
                'telefone' => '(81) 3567-8901',
                'endereco' => 'Rua Gastronômica, 710 - Recife/PE',
                'data_cadastro' => '2025-01-08 15:20:00',
                'ativo' => true
            ],
            [
                'id' => 10,
                'nome' => 'AutoParts Express',
                'slug' => 'autoparts-express',
                'descricao' => 'Peças automotivas e acessórios para seu veículo.',
                'cnpj' => '01.234.567/0001-99',
                'email' => 'suporte@autoparts.com.br',
                'telefone' => '(19) 3789-0123',
                'endereco' => 'Av. Automotiva, 1200 - Campinas/SP',
                'data_cadastro' => '2024-06-18 12:10:00',
                'ativo' => true
            ]
        ];
    }
}