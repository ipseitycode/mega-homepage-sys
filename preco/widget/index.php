<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPrecoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPrecoHomeException.php';

//WIDGET
require 'ProdutoPrecoHomeWidget.php';