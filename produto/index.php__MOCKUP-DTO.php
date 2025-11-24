<?php
header('Content-Type: application/json; charset=utf-8');

class ProdutoStartup
{
    public static function inicializar(): void
    {
        // Pega o parâmetro 'teste' da URL (mockup por padrão)
        $tipo = $_GET['teste'] ?? 'mockup';

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

        // Valida o parâmetro
        if (!in_array($tipo, ['mockup', 'transfer'])) {
            echo json_encode([
                'erro' => 'Parâmetro inválido',
                'parametro_recebido' => $tipo,
                'parametros_validos' => ['mockup', 'transfer']
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return;
        }

        // Chama o método que tenta carregar e validar as classes correspondentes
        self::carregarIncludes($itens, $tipo);
    }

    private static function carregarIncludes(array $itens, string $tipo): void
    {
        $resultados = [];

        foreach ($itens as $item) {
            echo "🔹 Verificando item: {$item} (tipo: {$tipo})\n";

            if ($tipo === 'mockup') {
                $resultado = self::processarMockup($item);
            } else {
                $resultado = self::processarTransfer($item);
            }

            if ($resultado !== null) {
                $resultados[$item] = $resultado;
            }

            echo "---------------------------------------------\n";
        }

        // Exibe resultado final em JSON
        echo "\n\n📋 RESULTADO FINAL EM JSON:\n";
        echo json_encode($resultados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    private static function processarMockup(string $item): ?array
    {
        // Exemplo: ProdutoCaracteristicaHomeMockup
        $classe = 'Produto' . ucfirst($item) . 'HomeMockup';
        $arquivo = "../" . lcfirst($item) . "/mockup/" . $classe . '.php';

        echo "📁 Procurando mockup: {$arquivo}\n";

        // Tenta incluir o arquivo, se existir
        if (!file_exists($arquivo)) {
            echo "⚠️ Arquivo não encontrado\n";
            return null;
        }

        require_once $arquivo;
        echo "✅ Arquivo carregado\n";

        // Verifica se a classe existe
        if (!class_exists($classe)) {
            echo "❌ Classe não encontrada: {$classe}\n";
            return null;
        }

        echo "✅ Classe encontrada: {$classe}\n";

        // Verifica se o método pesquisarDados existe
        if (!method_exists($classe, 'pesquisarDados')) {
            echo "⚠️ Método pesquisarDados() não encontrado em {$classe}\n";
            return null;
        }

        echo "📡 Executando método {$classe}::pesquisarDados()\n";

        // Executa o método
        try {
            $dados = $classe::pesquisarDados();
            echo "✅ Dados obtidos com sucesso\n";
            return $dados;
        } catch (Throwable $e) {
            echo "❌ Erro ao executar pesquisarDados(): " . $e->getMessage() . "\n";
            return null;
        }
    }

    private static function processarTransfer(string $item): ?array
    {
        // Exemplo: ProdutoCaracteristicaHomeTransfer
        $classeTransfer = 'Produto' . ucfirst($item) . 'HomeTransfer';
        $classeMockup = 'Produto' . ucfirst($item) . 'HomeMockup';
        
        $arquivoTransfer = "../" . lcfirst($item) . "/transfer/" . $classeTransfer . '.php';
        $arquivoMockup = "../" . lcfirst($item) . "/mockup/" . $classeMockup . '.php';

        echo "📁 Procurando transfer: {$arquivoTransfer}\n";

        // Carrega a interface primeiro (ajuste o caminho conforme sua estrutura)
        $arquivoInterface = '../../includes/interfaces/ProdutoHomeTransferInterface.php';
        if (file_exists($arquivoInterface) && !interface_exists('ProdutoHomeTransferInterface')) {
            require_once $arquivoInterface;
            echo "✅ Interface carregada\n";
        }

        // Verifica se o arquivo transfer existe
        if (!file_exists($arquivoTransfer)) {
            echo "⚠️ Arquivo transfer não encontrado\n";
            return null;
        }

        require_once $arquivoTransfer;
        echo "✅ Arquivo transfer carregado\n";

        // Verifica se o arquivo mockup existe (necessário para obter dados)
        if (!file_exists($arquivoMockup)) {
            echo "⚠️ Arquivo mockup não encontrado (necessário para dados)\n";
            return null;
        }

        require_once $arquivoMockup;
        echo "✅ Arquivo mockup carregado\n";

        // Verifica se as classes existem
        if (!class_exists($classeTransfer)) {
            echo "❌ Classe transfer não encontrada: {$classeTransfer}\n";
            return null;
        }

        if (!class_exists($classeMockup)) {
            echo "❌ Classe mockup não encontrada: {$classeMockup}\n";
            return null;
        }

        echo "✅ Classes encontradas\n";
        echo "📡 Executando {$classeMockup}::pesquisarDados()\n";

        try {
            // Obtém dados do mockup
            $mockupDados = $classeMockup::pesquisarDados();
            echo "✅ Dados obtidos do mockup\n";

            // Cria objeto transfer
            echo "🔄 Criando objeto transfer...\n";
            $objetoTransfer = new $classeTransfer($mockupDados);
            echo "✅ Objeto transfer criado\n";

            // Converte para array usando getters
            $dados = self::transferParaArray($objetoTransfer);
            echo "✅ Dados convertidos para array\n";
            
            return $dados;
        } catch (Throwable $e) {
            echo "❌ Erro ao processar transfer: " . $e->getMessage() . "\n";
            return null;
        }
    }

    private static function transferParaArray($objeto): array
    {
        // Lista de getters comuns (ajuste conforme necessário)
        $getters = [
            'getId', 'getCodigo', 'getUrl', 'getNome', 'getDescricao',
            'getDataCriacao', 'getDataExpiracao', 'getPublicar',
            'getCategoriaId', 'getLojaId'
        ];

        $dados = [];
        
        foreach ($getters as $getter) {
            if (method_exists($objeto, $getter)) {
                // Converte getNome -> nome, getDataCriacao -> data_criacao
                $chave = lcfirst(str_replace('get', '', $getter));
                $chave = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $chave));
                $dados[$chave] = $objeto->$getter();
            }
        }

        return $dados;
    }
}

// Executa automaticamente
ProdutoStartup::inicializar();