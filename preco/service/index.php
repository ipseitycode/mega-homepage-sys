<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPrecoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPrecoHomeException.php';

//RESPONSE
require '../response/ProdutoPrecoHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoPrecoHomeResponseTransfer.php';
require '../transfer/ProdutoPrecoHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoPrecoHomeMockup.php';

//SERVICE
require 'ProdutoPrecoHomeService.php';