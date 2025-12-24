<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPagamentoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPagamentoHomeException.php';

//RESPONSE
require '../response/ProdutoPagamentoHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoPagamentoHomeResponseTransfer.php';
require '../transfer/ProdutoPagamentoHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoPagamentoHomeMockup.php';

//SERVICE
require 'ProdutoPagamentoHomeService.php';