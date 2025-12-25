<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoSubcategoriaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoSubcategoriaHomeException.php';

//TRANSFER
require '../transfer/ProdutoSubcategoriaHomeResponseTransfer.php';
require '../transfer/ProdutoSubcategoriaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoSubcategoriaHomeRequest.php';

//SERVICE
require '../service/ProdutoSubcategoriaHomeService.php';

//VIEW
require '../view/ProdutoSubcategoriaHomeView.php';

//CONTROLLER
require 'ProdutoSubcategoriaHomeController.php'; 