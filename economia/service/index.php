<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoEconomiaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoEconomiaHomeException.php';

//RESPONSE
require '../response/ProdutoEconomiaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoEconomiaHomeResponseTransfer.php';
require '../transfer/ProdutoEconomiaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoEconomiaHomeMockup.php';

//SERVICE
require 'ProdutoEconomiaHomeService.php';