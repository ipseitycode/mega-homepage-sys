<?php

class ProdutoProdutoHomeMockup
{
    public static function pesquisarDados(): array
    {
        $itens = [
            'cashback' => [
                'id' => 1,
                'nome' => 'cashback',
                'titulo' => 'Cashback',
                'valor_percentual' => 5,
                'descricao' => 'Receba 5% de volta na sua carteira digital.'
            ],
            'categoria' => [
                'id' => 2,
                'nome' => 'categoria',
                'titulo' => 'Categoria',
                'valor' => 'Música'
            ],
            'colecao' => [
                'id' => 3,
                'nome' => 'colecao',
                'titulo' => 'Coleção',
                'valor' => 'Acústico MTV'
            ],
            'cupom' => [
                'id' => 4,
                'nome' => 'cupom',
                'titulo' => 'Cupom de Desconto',
                'codigo' => 'VINIL10',
                'desconto_percentual' => 10,
                'descricao' => 'Cupom de 10% de desconto em discos de vinil.'
            ],
            'desconto' => [
                'id' => 5,
                'nome' => 'desconto',
                'titulo' => 'Desconto',
                'valor_percentual' => 15,
                'descricao' => 'Desconto promocional aplicado automaticamente.'
            ],
            'economia' => [
                'id' => 6,
                'nome' => 'economia',
                'titulo' => 'Economia',
                'valor_estimado' => 25.00,
                'moeda' => 'BRL'
            ],
            'frete' => [
                'id' => 7,
                'nome' => 'frete',
                'titulo' => 'Frete',
                'tipo' => 'Grátis',
                'prazo' => '5 a 7 dias úteis'
            ],
            'home' => [
                'id' => 8,
                'nome' => 'home',
                'titulo' => 'Página Inicial',
                'valor' => 'Loja Oficial de Música e Vinis'
            ],
            'loja' => [
                'id' => 9,
                'nome' => 'loja',
                'titulo' => 'Loja',
                'nome_loja' => 'Loja do Som',
                'avaliacao' => 4.8
            ],
            'marca' => [
                'id' => 10,
                'nome' => 'marca',
                'titulo' => 'Marca',
                'valor' => 'Capital Inicial'
            ],
            'oferta' => [
                'id' => 11,
                'nome' => 'oferta',
                'titulo' => 'Oferta',
                'titulo_oferta' => 'Vinil Acústico MTV em promoção!',
                'data_validade' => '2025-11-30'
            ],
            'pagamento' => [
                'id' => 12,
                'nome' => 'pagamento',
                'titulo' => 'Pagamento',
                'formas' => ['Cartão de crédito', 'Pix', 'Boleto'],
                'parcelamento_sem_juros' => 3
            ],
            'parcela' => [
                'id' => 13,
                'nome' => 'parcela',
                'titulo' => 'Parcelamento',
                'quantidade_maxima' => 10,
                'sem_juros' => 3
            ],
            'pesquisa' => [
                'id' => 14,
                'nome' => 'pesquisa',
                'titulo' => 'Palavras-chave de Pesquisa',
                'termos' => ['disco vinil', 'capital inicial', 'acústico mtv', 'rock brasileiro']
            ],
            'preco' => [
                'id' => 15,
                'nome' => 'preco',
                'titulo' => 'Preço',
                'original' => 169.90,
                'promocional' => 144.90,
                'moeda' => 'BRL'
            ],
            'produto' => [
                'id' => 16,
                'nome' => 'produto',
                'titulo' => 'Produto',
                'nome_produto' => 'Disco Vinil Capital Inicial - Acústico MTV',
                'formato' => 'Vinil LP 12"',
                'lancamento' => 2020,
                'condicao' => 'Novo',
                'descricao' => 'Edição em vinil do álbum Acústico MTV da banda Capital Inicial, com som remasterizado e encarte exclusivo.'
            ],
            'subcategoria' => [
                'id' => 17,
                'nome' => 'subcategoria',
                'titulo' => 'Subcategoria',
                'valor' => 'Rock Nacional'
            ]
        ];

        return $itens;
    }
}
