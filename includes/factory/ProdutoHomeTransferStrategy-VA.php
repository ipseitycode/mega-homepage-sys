<?php

class ProdutoCategoriaHomeStrategy
{
    public function optarCategoria() 
    {
        return new ProdutoCategoriaHomeTransfer(
            ProdutoCategoriaHomeMockup::pesquisarDados()
        );
    }

    public function optarCashback()
    {
        return new ProdutoCashbackHomeTransfer(
            ProdutoCashbackHomeMockup::pesquisarDados()
        );
    }
}
