<?php

echo "controller<br/>";

require_once './model/Cliente.php';

class ClienteController {

    public function listar() {

        echo "controller => listar()<br/>";
        $obj = new Cliente;
        $cliente = $obj->listar();

        $_REQUEST['clientes'] = $cliente;

        require_once './view/ClienteView.php';
    }

    public function salvar($obj) {
        $cliente = new Cliente;
        $cliente->salvar($obj);

        $_REQUEST['cliente'] = $cliente;

        require_once './view/ClienteView.php';
    }

}
