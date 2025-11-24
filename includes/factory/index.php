<?php


class ProdutoStartup
{
    public static function inicializar(): void
    {
        // Pega o parâmetro 'teste' da URL (mockup por padrão)
        $tipo = $_GET['teste'] ?? 'mockup';

        // Valida o parâmetro
        if (!in_array($tipo, ['mockup', 'transfer'])) {
            $tipo = 'mockup';
        }

        // Lista de itens
        $itens = [
            'cashback',
            'caracteristica',
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

        // Gera o HTML
        echo '<!DOCTYPE html>';
        echo '<html lang="pt-br">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>Produto Startup</title>';
        echo '<style>
                body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 20px; color: #333; }
                h1 { font-size: 22px; margin-bottom: 10px; }
                .controls { margin-bottom: 20px; padding: 15px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
                .controls label { font-weight: bold; margin-right: 10px; }
                .controls select { padding: 8px 15px; font-size: 14px; border: 1px solid #ddd; border-radius: 4px; cursor: pointer; }
                .badge { display: inline-block; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: bold; margin-left: 10px; }
                .badge-mockup { background: #e3f2fd; color: #1976d2; }
                .badge-transfer { background: #f3e5f5; color: #7b1fa2; }
                .container { display: flex; flex-wrap: wrap; gap: 20px; }
                .card { background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
                .card h2 { font-size: 16px; text-transform: capitalize; text-align: center; margin-bottom: 8px; }
                .card h2 a { text-decoration: none; color: #333; }
                .card h2 a:hover { color: #1976d2; }
                iframe { border: 1px solid #ccc; border-radius: 6px; width: 400px; height: 500px; }
              </style>';
        echo '</head>';
        echo '<body>';

        echo '<h1>Visualização de Itens - ProdutoHomeTransferStrategyTest';
        echo '<span class="badge badge-' . $tipo . '">' . strtoupper($tipo) . '</span>';
        echo '</h1>';

        // Controles para alternar entre mockup e transfer
        echo '<div class="controls">';
        echo '<label for="tipo-select">Selecione o tipo de dados:</label>';
        echo '<select id="tipo-select" onchange="window.location.href=\'?teste=\' + this.value">';
        echo '<option value="mockup"' . ($tipo === 'mockup' ? ' selected' : '') . '>Mockup (Padrão)</option>';
        echo '<option value="transfer"' . ($tipo === 'transfer' ? ' selected' : '') . '>Transfer</option>';
        echo '</select>';
        echo '</div>';

        echo '<div class="container">';

        // Loop para exibir todos os itens com seus respectivos frames
        foreach ($itens as $item) {
            // Monta a URL com o parâmetro teste
            $url = "ProdutoHomeTransferStrategyTest.php?teste={$item}";
            
            echo '<div class="card">';
            echo "<h2><a href='{$url}' target='_blank'>{$item}</a></h2>";
            echo "<iframe src='{$url}' title='{$item}'></iframe>";
            echo '</div>';
        }

        echo '</div>'; // fim container
        echo '</body>';
        echo '</html>';
    }
}

// Executa automaticamente o método
ProdutoStartup::inicializar();