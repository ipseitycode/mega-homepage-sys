<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoMarcaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoMarcaHomeException.php';

//TRANSFER
require '../transfer/ProdutoMarcaHomeResponseTransfer.php';
require '../transfer/ProdutoMarcaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoMarcaHomeRequest.php';

//SERVICE
require '../service/ProdutoMarcaHomeService.php';

//VIEW
require '../view/ProdutoMarcaHomeView.php';

//CONTROLLER
require 'ProdutoMarcaHomeController.php'; 