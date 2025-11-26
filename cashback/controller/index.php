<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCashbackHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCashbackHomeException.php';

//TRANSFER
require '../transfer/ProdutoCashbackHomeResponseTransfer.php';
require '../transfer/ProdutoCashbackHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoCashbackHomeRequest.php';

//SERVICE
require '../service/ProdutoCashbackHomeService.php';

//VIEW
require '../view/ProdutoCashbackHomeView.php';

//CONTROLLER
require 'ProdutoCashbackHomeController.php'; 