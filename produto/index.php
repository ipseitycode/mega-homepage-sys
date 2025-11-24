<?php
header('Content-Type: application/json; charset=utf-8');



class ProdutoStartup
{
    public static function inicializar(): void
    {
        // Lista de itens
        $itens = [
            'caracteristica',
            'cashback',
            'categoria',
            'colecao',
            'cupom',
            'desconto',
            'economia',
            'frete',
            'home',
            'imagem',
            'lancamento',
            'loja',
            'marca',
            'oferta',
            'pagamento',
            'parcela',
            'pesquisa',
            'preco',
            'subcategoria',
            'produto'
        ];

        // Chama o método que tenta carregar e validar as classes correspondentes
        self::carregarIncludes($itens);
    }

    private static function carregarIncludes(array $itens): void
    {
        foreach ($itens as $item) {
            // Exemplo de nome de classe esperado: ProdutoCashbackHomeMockup
            $classe = 'Produto' . ucfirst($item) . 'HomeMockup';
            $arquivo = "../". lcfirst($item) . "/" .$classe . '.php';

            echo "🔹 Verificando item: {$item}\n";

            // Tenta incluir o arquivo, se existir
            if (file_exists($arquivo)) {
                require_once $arquivo;
                echo "✅ Arquivo carregado: {$arquivo}\n";
            } else {
                echo "⚠️ Arquivo não encontrado: {$arquivo}\n";
                continue;
            }

            // Verifica se a classe existe
            if (class_exists($classe)) {
                echo "✅ Classe encontrada: {$classe}\n";

                // Verifica se o método pesquisarDados existe
                if (method_exists($classe, 'pesquisarDados')) {
                    echo "📡 Executando método {$classe}::pesquisarDados()\n";

                    // Executa o método
                    try {
                        $dados = $classe::pesquisarDados();
                        echo "📦 Retorno obtido:\n";
                        var_dump($dados);
                    } catch (Throwable $e) {
                        echo "❌ Erro ao executar pesquisarDados(): " . $e->getMessage() . "\n";
                    }
                } else {
                    echo "⚠️ Método pesquisarDados() não encontrado em {$classe}\n";
                }
            } else {
                echo "❌ Classe não encontrada: {$classe}\n";
            }

            echo "---------------------------------------------\n";
        }
    }
}

// Executa automaticamente
ProdutoStartup::inicializar();