<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoOfertaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoOfertaHomeException.php';

//MOCKUP
require 'ProdutoOfertaHomeMockup.php';