<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCaracteristicaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCaracteristicaHomeException.php';

//RESPONSE
require '../response/ProdutoCaracteristicaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoCaracteristicaHomeResponseTransfer.php';
require '../transfer/ProdutoCaracteristicaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoCaracteristicaHomeMockup.php';

//SERVICE
require 'ProdutoCaracteristicaHomeService.php';