<?php

class ProdutoParcelaHomeResponseTransfer
{
    private $id;
    private $pedido_id;
    private $numero_parcela;
    private $valor;
    private $data_vencimento;
    private $status;

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

    public function getPedidoId()
    {
        return $this->pedido_id;
    }

    public function setPedidoId($pedido_id)
    {
        $this->pedido_id = $pedido_id;
    }

    public function getNumeroParcela()
    {
        return $this->numero_parcela;
    }

    public function setNumeroParcela($numero_parcela)
    {
        $this->numero_parcela = $numero_parcela;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }

    public function setDataVencimento($data_vencimento)
    {
        $this->data_vencimento = $data_vencimento;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}