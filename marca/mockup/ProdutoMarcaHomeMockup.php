<?php

class ProdutoMarcaHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'nome' => 'TechMaster',
            'slug' => 'techmaster',
            'descricao' => 'Fabricante líder em produtos de tecnologia e eletrônicos portáteis.',
            'pais_origem' => 'Brasil',
            'site' => 'https://techmaster.com.br'
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'TechMaster',
                'slug' => 'techmaster',
                'descricao' => 'Fabricante líder em produtos de tecnologia e eletrônicos portáteis.',
                'pais_origem' => 'Brasil',
                'site' => 'https://techmaster.com.br'
            ],
            [
                'id' => 2,
                'nome' => 'StyleWear',
                'slug' => 'stylewear',
                'descricao' => 'Marca internacional de moda urbana e casual.',
                'pais_origem' => 'Itália',
                'site' => 'https://stylewear.it'
            ],
            [
                'id' => 3,
                'nome' => 'HomeComfort',
                'slug' => 'homecomfort',
                'descricao' => 'Especialista em móveis e decoração para ambientes residenciais.',
                'pais_origem' => 'Suécia',
                'site' => 'https://homecomfort.se'
            ],
            [
                'id' => 4,
                'nome' => 'FitActive',
                'slug' => 'fitactive',
                'descricao' => 'Produtos esportivos e suplementos para vida saudável.',
                'pais_origem' => 'Estados Unidos',
                'site' => 'https://fitactive.com'
            ],
            [
                'id' => 5,
                'nome' => 'BeautyNature',
                'slug' => 'beautynature',
                'descricao' => 'Cosméticos naturais e orgânicos certificados.',
                'pais_origem' => 'França',
                'site' => 'https://beautynature.fr'
            ],
            [
                'id' => 6,
                'nome' => 'GameZone',
                'slug' => 'gamezone',
                'descricao' => 'Desenvolvedor e fabricante de consoles e jogos eletrônicos.',
                'pais_origem' => 'Japão',
                'site' => 'https://gamezone.jp'
            ],
            [
                'id' => 7,
                'nome' => 'EcoLife',
                'slug' => 'ecolife',
                'descricao' => 'Produtos sustentáveis e ecológicos para o dia a dia.',
                'pais_origem' => 'Alemanha',
                'site' => 'https://ecolife.de'
            ],
            [
                'id' => 8,
                'nome' => 'PetCare Plus',
                'slug' => 'petcare-plus',
                'descricao' => 'Alimentos premium e acessórios para animais de estimação.',
                'pais_origem' => 'Canadá',
                'site' => 'https://petcareplus.ca'
            ],
            [
                'id' => 9,
                'nome' => 'AudioPro',
                'slug' => 'audiopro',
                'descricao' => 'Equipamentos de áudio profissional e fones de ouvido.',
                'pais_origem' => 'Coreia do Sul',
                'site' => 'https://audiopro.kr'
            ],
            [
                'id' => 10,
                'nome' => 'GourmetChef',
                'slug' => 'gourmetchef',
                'descricao' => 'Utensílios de cozinha e equipamentos para gastronomia.',
                'pais_origem' => 'Espanha',
                'site' => 'https://gourmetchef.es'
            ]
        ];
    }
}
