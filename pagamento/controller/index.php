<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPagamentoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPagamentoHomeException.php';

//TRANSFER
require '../transfer/ProdutoPagamentoHomeResponseTransfer.php';
require '../transfer/ProdutoPagamentoHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoPagamentoHomeRequest.php';

//SERVICE
require '../service/ProdutoPagamentoHomeService.php';

//VIEW
require '../view/ProdutoPagamentoHomeView.php';

//CONTROLLER
require 'ProdutoPagamentoHomeController.php'; 