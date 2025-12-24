<?php

class ProdutoColecaoHomeMockup
{
    public static function retornarItem(): array
    {
        return [
            'id' => 1,
            'nome' => 'Coleção Verão 2025',
            'descricao' => 'Conjunto de produtos em promoção para o verão 2025.',
            'tema' => 'Verão e Tecnologia',
            'data_inicio' => '2025-01-01',
            'data_fim' => '2025-03-31',
            'publicar' => true
        ];
    }

    public static function retornarLista(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'Coleção Verão 2025',
                'descricao' => 'Conjunto de produtos em promoção para o verão 2025.',
                'tema' => 'Verão e Tecnologia',
                'data_inicio' => '2025-01-01',
                'data_fim' => '2025-03-31',
                'publicar' => true
            ],
            [
                'id' => 2,
                'nome' => 'Coleção Outono Essencial',
                'descricao' => 'Produtos selecionados para o clima ameno do outono.',
                'tema' => 'Conforto e Estilo',
                'data_inicio' => '2025-04-01',
                'data_fim' => '2025-06-30',
                'publicar' => true
            ],
            [
                'id' => 3,
                'nome' => 'Inverno Aconchegante',
                'descricao' => 'Itens ideais para os dias mais frios do ano.',
                'tema' => 'Aconchego e Bem-estar',
                'data_inicio' => '2025-07-01',
                'data_fim' => '2025-09-30',
                'publicar' => false
            ],
            [
                'id' => 4,
                'nome' => 'Primavera Renovada',
                'descricao' => 'Novidades para renovar seu estilo na primavera.',
                'tema' => 'Renovação e Cores',
                'data_inicio' => '2025-10-01',
                'data_fim' => '2025-12-31',
                'publicar' => true
            ],
            [
                'id' => 5,
                'nome' => 'Black Friday Especial',
                'descricao' => 'Descontos imperdíveis na maior promoção do ano.',
                'tema' => 'Promoções e Ofertas',
                'data_inicio' => '2025-11-20',
                'data_fim' => '2025-11-30',
                'publicar' => true
            ],
            [
                'id' => 6,
                'nome' => 'Natal Encantado',
                'descricao' => 'Presentes perfeitos para o final de ano.',
                'tema' => 'Natal e Família',
                'data_inicio' => '2025-12-01',
                'data_fim' => '2025-12-25',
                'publicar' => false
            ],
            [
                'id' => 7,
                'nome' => 'Ano Novo, Estilo Novo',
                'descricao' => 'Comece o ano com produtos inovadores.',
                'tema' => 'Inovação e Tendências',
                'data_inicio' => '2026-01-01',
                'data_fim' => '2026-01-31',
                'publicar' => true
            ],
            [
                'id' => 8,
                'nome' => 'Dia das Mães Especial',
                'descricao' => 'Presentes únicos para homenagear as mães.',
                'tema' => 'Amor e Gratidão',
                'data_inicio' => '2025-05-01',
                'data_fim' => '2025-05-15',
                'publicar' => true
            ],
            [
                'id' => 9,
                'nome' => 'Volta às Aulas',
                'descricao' => 'Tudo que você precisa para o novo ano letivo.',
                'tema' => 'Educação e Organização',
                'data_inicio' => '2025-01-15',
                'data_fim' => '2025-02-28',
                'publicar' => false
            ],
            [
                'id' => 10,
                'nome' => 'Semana do Consumidor',
                'descricao' => 'Ofertas exclusivas na semana do consumidor.',
                'tema' => 'Economia e Vantagens',
                'data_inicio' => '2025-03-10',
                'data_fim' => '2025-03-17',
                'publicar' => true
            ]
        ];
    }
}