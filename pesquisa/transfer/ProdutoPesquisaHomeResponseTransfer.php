<?php

class ProdutoPesquisaHomeResponseTransfer
{
    private $id;
    private $termo;
    private $filtros;
    private $ordenacao;
    private $total_resultados;
    private $data_busca;

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

    public function getTermo()
    {
        return $this->termo;
    }

    public function setTermo($termo)
    {
        $this->termo = $termo;
    }

    public function getFiltros()
    {
        return $this->filtros;
    }

    public function setFiltros($filtros)
    {
        $this->filtros = $filtros;
    }

    public function getOrdenacao()
    {
        return $this->ordenacao;
    }

    public function setOrdenacao($ordenacao)
    {
        $this->ordenacao = $ordenacao;
    }

    public function getTotalResultados()
    {
        return $this->total_resultados;
    }

    public function setTotalResultados($total_resultados)
    {
        $this->total_resultados = $total_resultados;
    }

    public function getDataBusca()
    {
        return $this->data_busca;
    }

    public function setDataBusca($data_busca)
    {
        $this->data_busca = $data_busca;
    }
}