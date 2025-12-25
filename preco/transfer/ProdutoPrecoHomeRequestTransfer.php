<?php 

class ProdutoPrecoHomeRequestTransfer {

    private $projeto;
    private $pacote;
    private $modulo;
    private $pagina;
    private $acao;
    private $campo;
    private $valor;

    public function __construct() 
    {
        
    }

    public function getProjeto() {
        return $this->projeto;
    }

    public function setProjeto($projeto) {
        $this->projeto = $projeto;
    }

    public function getPacote() {
        return $this->pacote;
    }

    public function setPacote($pacote) {
        $this->pacote = $pacote;
    }

    public function getModulo() {
        return $this->modulo;
    }

    public function setModulo($modulo) {
        $this->modulo = $modulo;
    }

    public function getPagina() {
        return $this->pagina;
    }

    public function setPagina($pagina) {
        $this->pagina = $pagina;
    }

    public function getAcao() {
        return $this->acao;
    }

    public function setAcao($acao) {
        $this->acao = $acao;
    }

    public function getCampo() {
        return $this->campo;
    }

    public function setCampo($campo) {
        $this->campo = $campo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}