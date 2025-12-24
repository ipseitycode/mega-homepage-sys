<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoFreteHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoFreteHomeException.php';

//RESPONSE
require '../response/ProdutoFreteHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoFreteHomeResponseTransfer.php';
require '../transfer/ProdutoFreteHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoFreteHomeMockup.php';

//SERVICE
require 'ProdutoFreteHomeService.php';