<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoImagemHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoImagemHomeException.php';

//RESPONSE
require '../response/ProdutoImagemHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoImagemHomeResponseTransfer.php';
require '../transfer/ProdutoImagemHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoImagemHomeMockup.php';

//SERVICE
require 'ProdutoImagemHomeService.php';