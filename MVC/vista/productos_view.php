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
        <style>
            td{
                border:1px dotted #FFOOOO;
            }
            </style>
            
    </head>
    <body>
        
        <table>
            <tr><td>Nombre del articulo</td>
        <?php
        
        foreach ($matrizProductos as $registro){
            echo "<tr><td>".$registro["NOMBREARTICULO"]."</td></tr>";
            
        }
        ?>
        </table>
    </body>
</html>
