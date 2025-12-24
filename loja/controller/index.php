<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoLojaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoLojaHomeException.php';

//TRANSFER
require '../transfer/ProdutoLojaHomeResponseTransfer.php';
require '../transfer/ProdutoLojaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoLojaHomeRequest.php';

//SERVICE
require '../service/ProdutoLojaHomeService.php';

//VIEW
require '../view/ProdutoLojaHomeView.php';

//CONTROLLER
require 'ProdutoLojaHomeController.php'; 