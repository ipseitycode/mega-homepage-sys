<?php 
class ProdutoCaracteristicaHomeResponseTransfer {

    private $id;
    private $cor;
    private $peso;
    private $dimensoes;
    private $material;
    private $conectividade;
    private $autonomia_bateria;
    private $tempo_carregamento;
    private $garantia;
    private $conteudo_embalagem;

    public function __construct() 
    {
        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getPeso() {
        return $this->peso;
    }
    
    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getDimensoes() {
        return $this->dimensoes;
    }

    public function setDimensoes($dimensoes) {
        $this->dimensoes = $dimensoes;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }

    public function getConectividade() {
        return $this->conectividade;
    }

    public function setConectividade($conectividade) {
        $this->conectividade = $conectividade;
    }

    public function getAutonomiaBateria() {
        return $this->autonomia_bateria;
    }

    public function setAutonomiaBateria($autonomia_bateria) {
        $this->autonomia_bateria = $autonomia_bateria;
    }

    public function getTempoCarregamento() {
        return $this->tempo_carregamento;
    }

    public function setTempoCarregamento($tempo_carregamento) {
        $this->tempo_carregamento = $tempo_carregamento;
    }

    public function getGarantia() {
        return $this->garantia;
    }

    public function setGarantia($garantia) {
        $this->garantia = $garantia;
    }

    public function getConteudoEmbalagem() {
        return $this->conteudo_embalagem;
    }

    public function setConteudoEmbalagem($conteudo_embalagem) {
        $this->conteudo_embalagem = $conteudo_embalagem;
    }

}