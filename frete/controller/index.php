<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoFreteHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoFreteHomeException.php';

//TRANSFER
require '../transfer/ProdutoFreteHomeResponseTransfer.php';
require '../transfer/ProdutoFreteHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoFreteHomeRequest.php';

//SERVICE
require '../service/ProdutoFreteHomeService.php';

//VIEW
require '../view/ProdutoFreteHomeView.php';

//CONTROLLER
require 'ProdutoFreteHomeController.php'; 