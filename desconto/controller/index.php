<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoDescontoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoDescontoHomeException.php';

//TRANSFER
require '../transfer/ProdutoDescontoHomeResponseTransfer.php';
require '../transfer/ProdutoDescontoHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoDescontoHomeRequest.php';

//SERVICE
require '../service/ProdutoDescontoHomeService.php';

//VIEW
require '../view/ProdutoDescontoHomeView.php';

//CONTROLLER
require 'ProdutoDescontoHomeController.php'; 