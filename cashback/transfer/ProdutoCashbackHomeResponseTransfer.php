<?php

class ProdutoCashbackHomeResponseTransfer {

    private $id;
    private $nome;
    private $descricao;
    private $data_criacao;
    private $data_expiracao;
    private $publicar;
    private $categoria_id;
    private $loja_id;

    public function __construct() 
    {
        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDataCriacao() {
        return $this->data_criacao;
    }

    public function setDataCriacao($data_criacao) {
        $this->data_criacao = $data_criacao;
    }

    public function getDataExpiracao() {
        return $this->data_expiracao;
    }

    public function setDataExpiracao($data_expiracao) {
        $this->data_expiracao = $data_expiracao;
    }

    public function getPublicar() {
        return $this->publicar;
    }

    public function setPublicar($publicar) {
        $this->publicar = $publicar;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function setCategoriaId($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function getLojaId() {
        return $this->loja_id;
    }

    public function setLojaId($loja_id) {
        $this->loja_id = $loja_id;
    }
}