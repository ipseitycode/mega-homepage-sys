<?php

class ProdutoPagamentoHomeResponseTransfer
{
    private $id;
    private $metodo;
    private $bandeiras_aceitas;
    private $parcelas_max;
    private $juros;
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

    public function getMetodo()
    {
        return $this->metodo;
    }

    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;
    }

    public function getBandeirasAceitas()
    {
        return $this->bandeiras_aceitas;
    }

    public function setBandeirasAceitas($bandeiras_aceitas)
    {
        $this->bandeiras_aceitas = $bandeiras_aceitas;
    }

    public function getParcelasMax()
    {
        return $this->parcelas_max;
    }

    public function setParcelasMax($parcelas_max)
    {
        $this->parcelas_max = $parcelas_max;
    }

    public function getJuros()
    {
        return $this->juros;
    }

    public function setJuros($juros)
    {
        $this->juros = $juros;
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