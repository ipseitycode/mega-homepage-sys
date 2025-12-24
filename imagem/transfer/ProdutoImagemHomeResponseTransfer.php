<?php

class ProdutoImagemHomeResponseTransfer
{
    private $id;
    private $nome;
    private $tipo;
    private $arquivo;
    private $url;
    private $data_upload;
    private $largura_px;
    private $altura_px;
    private $tamanho_kb;
    private $formato;
    private $cor_predominante;
    private $descricao;
    private $alt_text;
    private $responsiva;
    private $ativo;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }

    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getDataUpload()
    {
        return $this->data_upload;
    }

    public function setDataUpload($data_upload)
    {
        $this->data_upload = $data_upload;
    }

    public function getLarguraPx()
    {
        return $this->largura_px;
    }

    public function setLarguraPx($largura_px)
    {
        $this->largura_px = $largura_px;
    }

    public function getAlturaPx()
    {
        return $this->altura_px;
    }

    public function setAlturaPx($altura_px)
    {
        $this->altura_px = $altura_px;
    }

    public function getTamanhoKb()
    {
        return $this->tamanho_kb;
    }

    public function setTamanhoKb($tamanho_kb)
    {
        $this->tamanho_kb = $tamanho_kb;
    }

    public function getFormato()
    {
        return $this->formato;
    }

    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    public function getCorPredominante()
    {
        return $this->cor_predominante;
    }

    public function setCorPredominante($cor_predominante)
    {
        $this->cor_predominante = $cor_predominante;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getAltText()
    {
        return $this->alt_text;
    }

    public function setAltText($alt_text)
    {
        $this->alt_text = $alt_text;
    }

    public function getResponsiva()
    {
        return $this->responsiva;
    }

    public function setResponsiva($responsiva)
    {
        $this->responsiva = $responsiva;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }
}