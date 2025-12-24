<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoParcelaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoParcelaHomeException.php';

//RESPONSE
require '../response/ProdutoParcelaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoParcelaHomeResponseTransfer.php';
require '../transfer/ProdutoParcelaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoParcelaHomeMockup.php';

//SERVICE
require 'ProdutoParcelaHomeService.php';