<?php

class ProdutoCaracteristicaHomeConfiguration
{
    private $config = [];

    public function __construct()
    {
        // Inicializa o array de configuração
        $this->config = [
            'aplicacao' => [],
            'usuario' => [],
            'conteudo' => [],
            'servidor' => [],
            'conexao' => [],
            'integracao' => []
        ];
    }

    // ----------------------------------------
    // CONFIGURAR APLICAÇÃO
    // ----------------------------------------
    public function configurarAplicacao(string $modo = 'development', string $timezone = 'America/Sao_Paulo', bool $debug = true)
    {
        $this->config['aplicacao'] = [
            'modo_execucao' => $modo,
            'timezone' => $timezone,
            'debug' => $debug,
            'diretorio_base' => dirname(__FILE__)
        ];

        date_default_timezone_set($timezone);

        return $this->config['aplicacao'];
    }

    // ----------------------------------------
    // CONFIGURAR USUÁRIO
    // ----------------------------------------
    public function configurarUsuario(int $senhaMin = 6, bool $permitirLoginSocial = false, array $roles = ['USER'])
    {
        $this->config['usuario'] = [
            'senha_min_caracteres' => $senhaMin,
            'login_social' => $permitirLoginSocial,
            'roles_padrao' => $roles
        ];

        return $this->config['usuario'];
    }

    // ----------------------------------------
    // CONFIGURAR CONTEÚDO
    // ----------------------------------------
    public function configurarConteudo(string $idioma = 'pt_BR', string $formatoData = 'd/m/Y')
    {
        $this->config['conteudo'] = [
            'idioma_padrao' => $idioma,
            'formato_data' => $formatoData,
            'encoding' => 'UTF-8',
        ];

        return $this->config['conteudo'];
    }

    // ----------------------------------------
    // CONFIGURAR SERVIDOR
    // ----------------------------------------
    public function configurarServidor(int $limiteMemoriaMB = 256, int $tempoExecucao = 30)
    {
        $this->config['servidor'] = [
            'limite_memoria' => $limiteMemoriaMB,
            'tempo_max_execucao' => $tempoExecucao,
        ];

        ini_set('memory_limit', $limiteMemoriaMB . 'M');
        ini_set('max_execution_time', $tempoExecucao);

        return $this->config['servidor'];
    }

    // ----------------------------------------
    // CONFIGURAR CONEXÃO
    // ----------------------------------------
    public function configurarConexao(string $host = 'localhost', string $banco = '', string $usuario = '', string $senha = '')
    {
        $this->config['conexao'] = [
            'host' => $host,
            'banco' => $banco,
            'usuario' => $usuario,
            'senha' => $senha,
            'pooling' => true
        ];

        return $this->config['conexao'];
    }

    // ----------------------------------------
    // CONFIGURAR INTEGRAÇÃO
    // ----------------------------------------
    public function configurarIntegracao(array $apisExternas = [])
    {
        $this->config['integracao'] = [
            'servicos' => $apisExternas,
            'timeout' => 10
        ];

        return $this->config['integracao'];
    }

    // ----------------------------------------
    // RETORNA TODA A CONFIGURAÇÃO
    // ----------------------------------------
    public function retornarConfiguracao()
    {
        return $this->config;
    }
}
