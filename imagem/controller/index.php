<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoImagemHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoImagemHomeException.php';

//TRANSFER
require '../transfer/ProdutoImagemHomeResponseTransfer.php';
require '../transfer/ProdutoImagemHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoImagemHomeRequest.php';

//SERVICE
require '../service/ProdutoImagemHomeService.php';

//VIEW
require '../view/ProdutoImagemHomeView.php';

//CONTROLLER
require 'ProdutoImagemHomeController.php'; 