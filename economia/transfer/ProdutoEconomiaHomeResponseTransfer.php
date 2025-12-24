<?php

class ProdutoEconomiaHomeResponseTransfer
{
    private $id;
    private $pedido_id;
    private $valor_total;
    private $origem;
    private $data_registro;

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

    public function getValorTotal()
    {
        return $this->valor_total;
    }

    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;
    }

    public function getOrigem()
    {
        return $this->origem;
    }

    public function setOrigem(array $origem)
    {
        $this->origem = $origem;
    }

    public function getDataRegistro()
    {
        return $this->data_registro;
    }

    public function setDataRegistro($data_registro)
    {
        $this->data_registro = $data_registro;
    }
}