<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCupomHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCupomHomeException.php';

//RESPONSE
require '../response/ProdutoCupomHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoCupomHomeResponseTransfer.php';
require '../transfer/ProdutoCupomHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoCupomHomeMockup.php';

//SERVICE
require 'ProdutoCupomHomeService.php';