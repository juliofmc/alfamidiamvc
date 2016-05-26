<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdoDAO
 *
 * @author Rodrigo Borges
 
class pdoDAO implements IDAO{
    public function atualizar($obj) {
        
    }

    public function excluir($id) {
        
    }

    public function listar() {
        
    }

    public function salvar($obj) {
        
    }

//put your code here
}*/

include_once 'IDAO.php';

class pdoDAO implements IDAO {

    public function __construct() {
        
    }

    public function atualizar($obj) {
        
    }

    public function excluir($id) {
        
    }

    public function listar() {
        try {

            $conn = new PDO('mysql:host=localhost;port=3306; '
                    . 'dbname=test' , 'admin', '');

            $result = $conn->query("SELECT id_cliente, nome FROM clientes");

            if ($result) {
                while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                    echo $row->id_cliente . " - " . $row->nome . "<br/>";
                }
            }
            
        } catch (PDOException $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function salvar($obj) {
        try {
            $conn = new PDO('mysql:unix_soquet=/tmp/mysql.sock;host=localhost;port=3306; '
                    . 'dbname=test' , 'admin', '');
            
 
                    //trata objeto $obj

 //           $conn->exec("INSERT INTO cliente(id_cliente, nome) VALUES ()");
 //             $conn->exec("INSERT INTO cliente(id_cliente nome) VALUES ($obj->id_cliente, $obj->nome)");
 //             $conn->exec("INSERT INTO cliente ('nome') VALUES ($obj->nome)");
            
            echo $obj->nome; 
            
              $conn->exec("INSERT INTO `test`.`clientes` (`nome`) VALUES ('$obj->nome')");
  //            $conn->exec("INSERT INTO `test`.`cliente` (`nome`) VALUES ('pessoa')");
   //           $conn->exec("NSERT INTO `test`.`cliente` (`nome`) VALUES ('pessoa')");
              
              
 //             INSERT INTO `test`.`cliente` (`nome`) VALUES ('cachorro');
//            $conn->exec("INSERT INTO `test`.`clientes` (`nome`) VALUES ('teste')");
              
            echo 'Sucesso ao inserir o cliente';

            
            
        } catch (PDOException $exc) {
            echo "Erro ao inserir cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

//put your code here
}


