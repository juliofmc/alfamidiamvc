<?php

echo "<h1>Caminho</h1><hr/>";
echo "index => autoload<br/>";


$classe = 'ClienteController';

require_once './controller/' . $classe . '.php';

//$obj = new $classe();
//$obj->listar();

//$arr = array(1, "teste 1");


//require_once './DAO/textDAO.php';
// require_once './DAO/pdoDAO.php';

$cliente = new Cliente();

$cliente->id_cliente = 1;
$cliente->nome = "diabo555";

//teste







//$obj = new textDAO();
//$obj = new pdoDAO();
$obj = new ClienteController();

$obj->salvar($cliente);



echo "<br/>";



$obj->listar();




//$obj = new ClienteController();
//$obj->salvar($obj);
