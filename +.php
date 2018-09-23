<!DOCTYPE html>
<?php
require 'DevuelveeProductos.php';
$pais=$_GET["buscar"];
$productos = new DevuelveeProductos();
$array_productos = $productos->get_productos($pais);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

?>

        <form action="conexion_clase.php" method="get">
            <label> Introduce pais <input type="text" name="buscar"></label>
            <input type="submit" name="enviando" value="¡Dale!">

        </form>
<?php
?>
    </body>
</html>
