<?php 


class ProdutoImagemHomeTransfer implements ProdutoHomeTransferInterface {

    private $id;
    private $codigo;
    private $url;
    private $nome;
    private $descricao;
    private $data_criacao;
    private $data_expiracao;
    private $publicar;
    private $categoria_id;
    private $loja_id;

    public function __construct(array $dados = []) {
        $this->id = $dados['id'] ?? null;
        $this->codigo = $dados['codigo'] ?? null;
        $this->url = $dados['url'] ?? null;
        $this->nome = $dados['nome'] ?? null;
        $this->descricao = $dados['descricao'] ?? null;
        $this->data_criacao = $dados['data_criacao'] ?? null;
        $this->data_expiracao = $dados['data_expiracao'] ?? null;
        $this->publicar = $dados['publicar'] ?? null;
        $this->categoria_id = $dados['categoria_id'] ?? null;
        $this->loja_id = $dados['loja_id'] ?? null;
    }

    public function getId() {
        return $this->id;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataCriacao() {
        return $this->data_criacao;
    }

    public function getDataExpiracao() {
        return $this->data_expiracao;
    }

    public function getPublicar() {
        return $this->publicar;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function getLojaId() {
        return $this->loja_id;
    }
}