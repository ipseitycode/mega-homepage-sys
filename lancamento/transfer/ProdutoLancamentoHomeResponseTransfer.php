<?php

class ProdutoLancamentoHomeResponseTransfer
{
    private $id;
    private $nome;
    private $descricao_curta;
    private $data_lancamento;
    private $data_disponibilidade;
    private $estoque_inicial;
    private $preco_lancamento;
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

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricaoCurta()
    {
        return $this->descricao_curta;
    }

    public function setDescricaoCurta($descricao_curta)
    {
        $this->descricao_curta = $descricao_curta;
    }

    public function getDataLancamento()
    {
        return $this->data_lancamento;
    }

    public function setDataLancamento($data_lancamento)
    {
        $this->data_lancamento = $data_lancamento;
    }

    public function getDataDisponibilidade()
    {
        return $this->data_disponibilidade;
    }

    public function setDataDisponibilidade($data_disponibilidade)
    {
        $this->data_disponibilidade = $data_disponibilidade;
    }

    public function getEstoqueInicial()
    {
        return $this->estoque_inicial;
    }

    public function setEstoqueInicial($estoque_inicial)
    {
        $this->estoque_inicial = $estoque_inicial;
    }

    public function getPrecoLancamento()
    {
        return $this->preco_lancamento;
    }

    public function setPrecoLancamento($preco_lancamento)
    {
        $this->preco_lancamento = $preco_lancamento;
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