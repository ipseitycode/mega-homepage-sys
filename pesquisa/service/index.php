<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPesquisaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPesquisaHomeException.php';

//RESPONSE
require '../response/ProdutoPesquisaHomeResponse.php';

//TRANSFER
require '../transfer/ProdutoPesquisaHomeResponseTransfer.php';
require '../transfer/ProdutoPesquisaHomeRequestTransfer.php';

//MOCKUP
require '../mockup/ProdutoPesquisaHomeMockup.php';

//SERVICE
require 'ProdutoPesquisaHomeService.php';