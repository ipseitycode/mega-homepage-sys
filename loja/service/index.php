<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoLojaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoLojaHomeException.php';

//RESPONSE
require '../response/ProdutoLojaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoLojaHomeResponseTransfer.php';
require '../transfer/ProdutoLojaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoLojaHomeMockup.php';

//SERVICE
require 'ProdutoLojaHomeService.php';