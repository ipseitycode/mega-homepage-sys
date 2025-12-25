<?php

class ProdutoPrecoHomeResponseTransfer
{
    private $produto_id;
    private $preco_base;
    private $preco_promocional;
    private $moeda;
    private $data_atualizacao;

    public function __construct()
    {
    }

    public function getProdutoId()
    {
        return $this->produto_id;
    }

    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    public function getPrecoBase()
    {
        return $this->preco_base;
    }

    public function setPrecoBase($preco_base)
    {
        $this->preco_base = $preco_base;
    }

    public function getPrecoPromocional()
    {
        return $this->preco_promocional;
    }

    public function setPrecoPromocional($preco_promocional)
    {
        $this->preco_promocional = $preco_promocional;
    }

    public function getMoeda()
    {
        return $this->moeda;
    }

    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;
    }

    public function getDataAtualizacao()
    {
        return $this->data_atualizacao;
    }

    public function setDataAtualizacao($data_atualizacao)
    {
        $this->data_atualizacao = $data_atualizacao;
    }
}