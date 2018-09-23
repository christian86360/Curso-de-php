<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $busqueda_cart = $_POST["c_art"];
      


        try {

            //conexion de base de datos orientada a objetos
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            $base->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

    $sql="DELETE FROM PRODUCTOS WHERE CODIGOARTICULO=:c_art";


            //$resultado = $base->prepare($sql);
            $resultado->execute(array(":c_art" => $busqueda_cart));

            echo "Registro eliminado";
            $resultado->closeCursor();
        } catch (Exception $ex) {
            die('Error:' . $ex->GetMessage());
        } finally {
            $base = null;
        }
        ?>
    </body>
</html>
