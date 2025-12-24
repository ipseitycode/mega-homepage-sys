<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoParcelaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoParcelaHomeException.php';

//WIDGET
require '../widget/ProdutoParcelaHomeWidget.php';

//VIEW
require 'ProdutoParcelaHomeView.php';