<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoEconomiaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoEconomiaHomeException.php';

//TRANSFER
require '../transfer/ProdutoEconomiaHomeResponseTransfer.php';
require '../transfer/ProdutoEconomiaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoEconomiaHomeRequest.php';

//SERVICE
require '../service/ProdutoEconomiaHomeService.php';

//VIEW
require '../view/ProdutoEconomiaHomeView.php';

//CONTROLLER
require 'ProdutoEconomiaHomeController.php'; 