<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json; charset=utf-8');

//Interface
require_once '../interfaces/ProdutoHomeTransferInterface.php';

//Mockup / Transfer
//require_once '../../preco/mockup/ProdutoPrecoHomeMockup.php';
//require_once '../../preco/transfer/ProdutoPrecoHomeTransfer.php';

//Strategy
require_once 'ProdutoHomeTransferStrategy.php';
//require_once 'ProdutoHomeTransferStrategyTest.php';



class ProdutoHomeTransferStrategyTest
{

    public static function VisualizarJson()
    {

        $strategy = new ProdutoCategoriaHomeStrategy();

        //arquivos

        $diretorio = isset($_GET['teste'])
            ? "" . strtolower($_GET['teste'])
            : '';
         
          //ProdutoPrecoHomeMockup
          //ProdutoPrecoHomeTransfer

        $mockupFile = '../../' . $diretorio . '/mockup/Produto'.ucfirst($diretorio).'HomeMockup.php';
        $trasferFile = '../../' . $diretorio . '/transfer/Produto'.ucfirst($diretorio).'HomeTransfer.php';

        if (!is_file($mockupFile) ) {
            return __METHOD__ . ".error.document.{$mockupFile},;";
        }

        if (!is_file($trasferFile)) {
            return __METHOD__ . ".error.document.{$trasferFile};";
        }

        require_once  $mockupFile;
        require_once  $trasferFile;

        //metodos

        $metodo = isset($_GET['teste'])
            ? "optar" . ucfirst($_GET['teste'])
            : 'optarPreco';


        if (!method_exists($strategy, $metodo)) {
            return __METHOD__ . ".error.method.{$metodo};";
        }

        $classe = $strategy->$metodo();
        $reflection = new ReflectionClass($classe);
        $resultado = [];


        foreach ($reflection->getMethods() as $method) {

            if ($method->getName() != '__construct') {

                $resultado['' .
                    str_replace("get", "", $method->getName()) . ''] =
                    '' . ($method->invoke($classe)) . '';


            }

        }

        if (count($resultado) < 1) {
            return __METHOD__ . ".error.method.null;";
        }

        //print_r($methodsInfo);
        return json_encode($resultado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }


}

print ProdutoHomeTransferStrategyTest::VisualizarJson();
