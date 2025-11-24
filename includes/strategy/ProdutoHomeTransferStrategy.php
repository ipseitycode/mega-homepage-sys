<?php

class ProdutoCategoriaHomeStrategy
{
    public function optarCategoria() 
    {
        return new ProdutoCategoriaHomeTransfer(
            ProdutoCategoriaHomeMockup::pesquisarDados()
        );
    }

    public function optarColecao() 
    {
        return new ProdutoColecaoHomeTransfer(
            ProdutoColecaoHomeMockup::pesquisarDados()
        );
    }

    public function optarCupom() 
    {
        return new ProdutoCupomHomeTransfer(
            ProdutoCupomHomeMockup::pesquisarDados()
        );
    }

    public function optarHome() 
    {
        return new ProdutoHomeHomeTransfer(
            ProdutoHomeHomeMockup::pesquisarDados()
        );
    }

    public function optarImagem() 
    {
        return new ProdutoImagemHomeTransfer(
            ProdutoImagemHomeMockup::pesquisarDados()
        );
    }

    public function optarLoja() 
    {
        return new ProdutoLojaHomeTransfer(
            ProdutoLojaHomeMockup::pesquisarDados()
        );
    }

    public function optarMarca() 
    {
        return new ProdutoMarcaHomeTransfer(
            ProdutoMarcaHomeMockup::pesquisarDados()
        );
    }

    public function optarOferta() 
    {
        return new ProdutoOfertaHomeTransfer(
            ProdutoOfertaHomeMockup::pesquisarDados()
        );
    }

    public function optarPesquisa() 
    {
        return new ProdutoPesquisaHomeTransfer(
            ProdutoPesquisaHomeMockup::pesquisarDados()
        );
    }

    public function optarPreco() 
    {
        return new ProdutoPrecoHomeTransfer(
            ProdutoPrecoHomeMockup::pesquisarDados()
        );
    }

    // public function optarProduto()
    // {
    //     return [
    //         'categoria'      => $this->optarCategoria(),
    //         'colecao'        => $this->optarColecao(),
    //         'cupom'          => $this->optarCupom(),
    //         'home'           => $this->optarHome(),
    //         'loja'           => $this->optarLoja(),
    //         'marca'          => $this->optarMarca(),
    //         'oferta'         => $this->optarOferta(),
    //         'pesquisa'       => $this->optarPesquisa(),
    //         'preco'          => $this->optarPreco(),
    //         'subcategoria'   => $this->optarSubcategoria(),
    //         'cashback'       => $this->optarCashback(),
    //         'frete'          => $this->optarFrete(),
    //         'desconto'       => $this->optarDesconto(),
    //         'parcela'        => $this->optarParcela(),
    //         'pagamento'      => $this->optarPagamento(),
    //         'economia'       => $this->optarEconomia(),
    //         'caracteristica' => $this->optarCaracteristica(),
    //         'lancamento'     => $this->optarLancamento(),
    //         'imagem'         => $this->optarImagem()
    //     ];
    // }

    public function optarSubcategoria() 
    {
        return new ProdutoSubcategoriaHomeTransfer(
            ProdutoSubcategoriaHomeMockup::pesquisarDados()
        );
    }

    public function optarCashback() 
    {
        return new ProdutoCashbackHomeTransfer(
            ProdutoCashbackHomeMockup::pesquisarDados()
        );
    }

    public function optarFrete() 
    {
        return new ProdutoFreteHomeTransfer(
            ProdutoFreteHomeMockup::pesquisarDados()
        );
    }

    public function optarDesconto() 
    {
        return new ProdutoDescontoHomeTransfer(
            ProdutoDescontoHomeMockup::pesquisarDados()
        );
    }

    public function optarParcela() 
    {
        return new ProdutoParcelaHomeTransfer(
            ProdutoParcelaHomeMockup::pesquisarDados()
        );
    }

    public function optarPagamento() 
    {
        return new ProdutoPagamentoHomeTransfer(
            ProdutoPagamentoHomeMockup::pesquisarDados()
        );
    }

    public function optarEconomia() 
    {
        return new ProdutoEconomiaHomeTransfer(
            ProdutoEconomiaHomeMockup::pesquisarDados()
        );
    }

    public function optarCaracteristica() 
    {
        return new ProdutoCaracteristicaHomeTransfer(
            ProdutoCaracteristicaHomeMockup::pesquisarDados()
        );
    }

    public function optarLancamento() 
    {
        return new ProdutoLancamentoHomeTransfer(
            ProdutoLancamentoHomeMockup::pesquisarDados()
        );
    }

    

}
