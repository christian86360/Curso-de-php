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
      try {
            
                     //conexion de base de datos orientada a objetos
               $base=new PDO('mysql:host=localhost; dbname=pruebas', 'root','');
               $base->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
             } catch (Exception $ex) {
                 die('Error:'.$ex->GetMessage());
                 
                 
                 
             } finally {
                  $base=null;    
             }
        ?>
    </body>
</html>



      