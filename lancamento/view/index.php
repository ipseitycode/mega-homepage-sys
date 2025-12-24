<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//VALIDATOR
require '../validator/ProdutoLancamentoHomeValidator.php';

//EXCEPTION
require '../exception/ProdutoLancamentoHomeException.php';

//WIDGET
require '../widget/ProdutoLancamentoHomeWidget.php';

//VIEW
require 'ProdutoLancamentoHomeView.php';