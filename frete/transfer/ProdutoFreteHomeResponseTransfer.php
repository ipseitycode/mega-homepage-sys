<?php

class ProdutoFreteHomeResponseTransfer
{
    private $id;
    private $tipo;
    private $prazo_min_dias;
    private $prazo_max_dias;
    private $valor;
    private $frete_gratis_acima;
    private $transportadora;

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

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getPrazoMinDias()
    {
        return $this->prazo_min_dias;
    }

    public function setPrazoMinDias($prazo_min_dias)
    {
        $this->prazo_min_dias = $prazo_min_dias;
    }

    public function getPrazoMaxDias()
    {
        return $this->prazo_max_dias;
    }

    public function setPrazoMaxDias($prazo_max_dias)
    {
        $this->prazo_max_dias = $prazo_max_dias;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getFreteGratisAcima()
    {
        return $this->frete_gratis_acima;
    }

    public function setFreteGratisAcima($frete_gratis_acima)
    {
        $this->frete_gratis_acima = $frete_gratis_acima;
    }

    public function getTransportadora()
    {
        return $this->transportadora;
    }

    public function setTransportadora($transportadora)
    {
        $this->transportadora = $transportadora;
    }
}