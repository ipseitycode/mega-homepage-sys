<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoColecaoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoColecaoHomeException.php';

//RESPONSE
require 'ProdutoColecaoHomeResponse.php';