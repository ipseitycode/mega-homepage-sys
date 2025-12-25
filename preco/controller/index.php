<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPrecoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPrecoHomeException.php';

//TRANSFER
require '../transfer/ProdutoPrecoHomeResponseTransfer.php';
require '../transfer/ProdutoPrecoHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoPrecoHomeRequest.php';

//SERVICE
require '../service/ProdutoPrecoHomeService.php';

//VIEW
require '../view/ProdutoPrecoHomeView.php';

//CONTROLLER
require 'ProdutoPrecoHomeController.php'; 