<?php

class ProdutoColecaoHomeResponseTransfer
{
    private $id;
    private $nome;
    private $descricao;
    private $tema;
    private $data_inicio;
    private $data_fim;
    private $publicar;

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

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function setTema($tema)
    {
        $this->tema = $tema;
    }

    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function getDataFim()
    {
        return $this->data_fim;
    }

    public function setDataFim($data_fim)
    {
        $this->data_fim = $data_fim;
    }

    public function getPublicar()
    {
        return $this->publicar;
    }

    public function setPublicar($publicar)
    {
        $this->publicar = $publicar;
    }
}