<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCategoriaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCategoriaHomeException.php';

//RESPONSE
require '../response/ProdutoCategoriaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoCategoriaHomeResponseTransfer.php';
require '../transfer/ProdutoCategoriaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoCategoriaHomeMockup.php';

//SERVICE
require 'ProdutoCategoriaHomeService.php';