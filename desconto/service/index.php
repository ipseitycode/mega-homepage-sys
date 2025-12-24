<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoDescontoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoDescontoHomeException.php';

//RESPONSE
require '../response/ProdutoDescontoHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoDescontoHomeResponseTransfer.php';
require '../transfer/ProdutoDescontoHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoDescontoHomeMockup.php';

//SERVICE
require 'ProdutoDescontoHomeService.php';