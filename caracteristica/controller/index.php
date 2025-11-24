<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCaracteristicaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCaracteristicaHomeException.php';

//TRANSFER
require '../transfer/ProdutoCaracteristicaHomeResponseTransfer.php';
require '../transfer/ProdutoCaracteristicaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoCaracteristicaHomeRequest.php';

//SERVICE
require '../service/ProdutoCaracteristicaHomeService.php';

//VIEW
require '../view/ProdutoCaracteristicaHomeView.php';

//CONTROLLER
require 'ProdutoCaracteristicaHomeController.php'; 