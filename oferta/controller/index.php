<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoOfertaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoOfertaHomeException.php';

//TRANSFER
require '../transfer/ProdutoOfertaHomeResponseTransfer.php';
require '../transfer/ProdutoOfertaHomeRequestTransfer.php';

//REQUEST 
require '../request/ProdutoOfertaHomeRequest.php';

//SERVICE
require '../service/ProdutoOfertaHomeService.php';

//VIEW
require '../view/ProdutoOfertaHomeView.php';

//CONTROLLER
require 'ProdutoOfertaHomeController.php'; 