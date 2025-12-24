<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoImagemHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoImagemHomeException.php';

//WIDGET
require '../widget/ProdutoImagemHomeWidget.php';

//VIEW
require 'ProdutoImagemHomeView.php';