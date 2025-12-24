<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoLancamentoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoLancamentoHomeException.php';

//RESPONSE
require '../response/ProdutoLancamentoHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoLancamentoHomeResponseTransfer.php';
require '../transfer/ProdutoLancamentoHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoLancamentoHomeMockup.php';

//SERVICE
require 'ProdutoLancamentoHomeService.php';