<?php
class ProdutoImagemHomeRequest
{
    private $validator;
     
    public function __construct()
    {
        $this->validator = new ProdutoImagemHomeValidator(); 
    }

    public function build($requestTransfer)
    {
        $projeto = $this->receberProjeto();
        $pacote = $this->receberPacote();
        $modulo = $this->receberModulo();
        $pagina = $this->recebePagina();
        $acao = $this->receberAcao();
        $campo = $this->receberCampo();
        $valor = $this->receberValor();

        $requestTransfer->setProjeto($projeto);
        $requestTransfer->setPacote($pacote);
        $requestTransfer->setModulo($modulo);
        $requestTransfer->setPagina($pagina);
        $requestTransfer->setAcao($acao);
        $requestTransfer->setCampo($campo);
        $requestTransfer->setValor($valor);

        return $requestTransfer;
    }

    public function receberProjeto()
    {
        $projeto = isset($_GET['projeto']) ? $_GET['projeto'] : null;
        $projeto = $this->validator->validarString($projeto)
            ? $projeto
            : null;

        return $projeto;
    }

    public function receberPacote()
    {
        $pacote = isset($_GET['pacote']) ? $_GET['pacote'] : null;
        $pacote = $this->validator->validarString($pacote)
            ? $pacote
            : null;

        return $pacote;
    }

    public function receberModulo()
    {
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : null;
        $modulo = $this->validator->validarString($modulo)
            ? $modulo
            : null;

        return $modulo;
    }

    public function recebePagina()
    {
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : null;
        $pagina = $this->validator->validarString($pagina)
            ? $pagina
            : null;

        return $pagina;
    }

    public function receberAcao()
    {
        $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
        $acao = $this->validator->validarString($acao)
            ? $acao
            : null;

        return $acao;
    }

    public function receberCampo()
    {
        $campo = isset($_GET['campo']) ? $_GET['campo'] : null;
        $campo = $this->validator->validarString($campo)
            ? $campo
            : null;

        return $campo;
    }

    public function receberValor()
    {
        $valor = isset($_GET['valor']) ? $_GET['valor'] : null;

        if (is_numeric($valor) && $this->validator->validarNumero($valor)) {
            return $valor;
        }

        if (is_string($valor) && $this->validator->validarString($valor)) {
            return $valor;
        }

        return null;
    }

}