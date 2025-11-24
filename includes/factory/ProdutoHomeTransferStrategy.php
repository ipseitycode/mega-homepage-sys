<?php

class ProdutoCategoriaHomeStrategy
{
    public function optarCategoria() 
    {
        return new ProdutoCategoriaHomeTransfer(
            ProdutoCategoriaHomeMockup::pesquisarDados()
        );
    }

    public function optarPreco()
    {
        return new ProdutoPrecoHomeTransfer(
            ProdutoPrecoHomeMockup::pesquisarDados()
        );
    }
}
