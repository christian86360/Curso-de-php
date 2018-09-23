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
        $id="";
        $contenido="";
        $tipo="";
        require ("datos_conexion.php");
        
$conexion= mysqli_connect($db_host, $db_usuario, $db_contra);
if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encontro la BBDD");
mysqli_set_charset($conexion, "utf8");
$consulta="SELECT * FROM archivos where id=1";

$resultado= mysqli_query($conexion, $consulta);

while ($fila= mysqli_fetch_array($resultado)){
          $id=$fila["id"];
          $contenido=$fila["Contenido"];
          $tipo=$fila["Tipo"];
         
}
echo "Id:".$id."<br>";
echo "Tipo:".$tipo."<br>";
echo "<img width='25%' src='data:image/jpeg; base64,".base64_encode($contenido)."'>";
        ?>
        <div>
           
        </div>
    </body>
</html>
