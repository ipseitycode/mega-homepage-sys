<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoPesquisaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoPesquisaHomeException.php';

//WIDGET
require '../widget/ProdutoPesquisaHomeWidget.php';

//VIEW
require 'ProdutoPesquisaHomeView.php';