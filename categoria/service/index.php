<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCashbackHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCashbackHomeException.php';

//RESPONSE
require '../response/ProdutoCashbackHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoCashbackHomeResponseTransfer.php';
require '../transfer/ProdutoCashbackHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoCashbackHomeMockup.php';

//SERVICE
require 'ProdutoCashbackHomeService.php';