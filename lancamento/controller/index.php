<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoLancamentoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoLancamentoHomeException.php';

//TRANSFER
require '../transfer/ProdutoLancamentoHomeResponseTransfer.php';
require '../transfer/ProdutoLancamentoHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoLancamentoHomeRequest.php';

//SERVICE
require '../service/ProdutoLancamentoHomeService.php';

//VIEW
require '../view/ProdutoLancamentoHomeView.php';

//CONTROLLER
require 'ProdutoLancamentoHomeController.php'; 