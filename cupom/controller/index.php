<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCupomHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCupomHomeException.php';

//TRANSFER
require '../transfer/ProdutoCupomHomeResponseTransfer.php';
require '../transfer/ProdutoCupomHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoCupomHomeRequest.php';

//SERVICE
require '../service/ProdutoCupomHomeService.php';

//VIEW
require '../view/ProdutoCupomHomeView.php';

//CONTROLLER
require 'ProdutoCupomHomeController.php'; 