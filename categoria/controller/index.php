<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCategoriaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCategoriaHomeException.php';

//TRANSFER
require '../transfer/ProdutoCategoriaHomeResponseTransfer.php';
require '../transfer/ProdutoCategoriaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoCategoriaHomeRequest.php';

//SERVICE
require '../service/ProdutoCategoriaHomeService.php';

//VIEW
require '../view/ProdutoCategoriaHomeView.php';

//CONTROLLER
require 'ProdutoCategoriaHomeController.php'; 