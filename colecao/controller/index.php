<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoColecaoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoColecaoHomeException.php';

//TRANSFER
require '../transfer/ProdutoColecaoHomeResponseTransfer.php';
require '../transfer/ProdutoColecaoHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoColecaoHomeRequest.php';

//SERVICE
require '../service/ProdutoColecaoHomeService.php';

//VIEW
require '../view/ProdutoColecaoHomeView.php';

//CONTROLLER
require 'ProdutoColecaoHomeController.php'; 