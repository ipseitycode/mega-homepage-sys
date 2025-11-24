<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoCaracteristicaHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoCaracteristicaHomeException.php';

//WIDGET
require '../widget/ProdutoCaracteristicaHomeWidget.php';

//VIEW
require 'ProdutoCaracteristicaHomeView.php';