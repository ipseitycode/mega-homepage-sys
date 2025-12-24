<?php
class ProdutoImagemHomeWidget {

    private $responseTransfer;

    public function __construct($responseTransfer)
    {
        $this->responseTransfer = $responseTransfer;
    } 

    public function visualizarSelecionar(): string
    {

        $lista = []; 

        foreach ($this->responseTransfer as $objeto) {
            $lista[] = [
                'id' => $objeto->getId(),
                'nome' => $objeto->getNome(),
                'tipo' => $objeto->getTipo(),
                'arquivo' => $objeto->getArquivo(),
                'url' => $objeto->getUrl(),
                'data_upload' => $objeto->getDataUpload(),
                'largura_px' => $objeto->getLarguraPx(),
                'altura_px' => $objeto->getAlturaPx(),
                'tamanho_kb' => $objeto->getTamanhoKb(),
                'formato' => $objeto->getFormato(),
                'cor_predominante' => $objeto->getCorPredominante(),
                'descricao' => $objeto->getDescricao(),
                'alt_text' => $objeto->getAltText(),
                'responsiva' => $objeto->getResponsiva(),
                'ativo' => $objeto->getAtivo()
            ];
        }

        return json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) ?: '';
    }

} 