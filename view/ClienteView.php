<?php
echo "<br/> view <br/>";

//require_once './model/Cliente.php';


$conn = new PDO('mysql:host=localhost;port=3306; '
                    . 'dbname=test' , 'admin', '');

$clientes = $conn->query("SELECT id_cliente, nome FROM clientes");


//$clientes = $_REQUEST['cliente'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Basico</title>

        <style>
            table,tr,th,td{border: 1px solid black;};
        </style>
    </head>
    <body>
        <?php if (count($cliente) > 0) { ?>
            <h1>Listagem</h1>
            <hr/>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                </tr>
                <?php
                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                       <?php $row = $cliente->fetch(PDO::FETCH_OBJ);   ?> 
                        <td> <?php  echo $row->nome ?> </td>;
                        <td> <?php  echo $row->id_cliente ?> </td>; 
                    </tr>
            </table>
            
            
        <?php
                 
                
                
        }  }
        
        else { echo 'Não há registros para listagem<br/>'; }
       
        ?>


        <article>
            <hr>
            <h2>Salvar</h2>
            <hr>
            <form action="" method="post">
                <label for="id_cliente">Id Cliente</label><br/>
                <input type="number" id="id_cliente" name="id_cliente"/>
                <br/>
                <br/>
                <label for="nome">Nome Cliente</label><br/>
                <input type="text" id="nome" name="nome"/>

                <input type="submit" value="Salvar" id="1"/>
            </form>
        </article>


    </body>
</html>
