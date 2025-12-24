<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoMarcaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoMarcaHomeException.php';

//RESPONSE
require '../response/ProdutoMarcaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoMarcaHomeResponseTransfer.php';
require '../transfer/ProdutoMarcaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoMarcaHomeMockup.php';

//SERVICE
require 'ProdutoMarcaHomeService.php';