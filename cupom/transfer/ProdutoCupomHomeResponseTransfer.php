<?php

class ProdutoCupomHomeResponseTransfer
{
    private $id;
    private $codigo;
    private $descricao;
    private $tipo;
    private $valor;
    private $uso_maximo;
    private $data_expiracao;
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

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getUsoMaximo()
    {
        return $this->uso_maximo;
    }

    public function setUsoMaximo($uso_maximo)
    {
        $this->uso_maximo = $uso_maximo;
    }

    public function getDataExpiracao()
    {
        return $this->data_expiracao;
    }

    public function setDataExpiracao($data_expiracao)
    {
        $this->data_expiracao = $data_expiracao;
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