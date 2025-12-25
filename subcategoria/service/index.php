<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoSubcategoriaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoSubcategoriaHomeException.php';

//RESPONSE
require '../response/ProdutoSubcategoriaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoSubcategoriaHomeResponseTransfer.php';
require '../transfer/ProdutoSubcategoriaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoSubcategoriaHomeMockup.php';

//SERVICE
require 'ProdutoSubcategoriaHomeService.php';