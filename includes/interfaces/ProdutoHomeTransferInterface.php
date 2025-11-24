<?php
interface ProdutoHomeTransferInterface
{
    public function getId();
    public function getCodigo();
    public function getUrl();
    public function getNome();
    public function getDescricao();
    public function getDataCriacao();
    public function getDataExpiracao();
    public function getPublicar();
    public function getCategoriaId();
    public function getLojaId();
}