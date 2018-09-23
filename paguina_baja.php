<?php


 require("conexioncursophp.php");

 
 //conexion ala mysql
 $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
             //para evitar la inyecion sql
  $usuario =mysqli_real_escape_string($conexion, $_GET["usu"]);
            //para evitar la inyecion sql
  $contra= $mysqli_real_escape_string($conexion,$_GET["con"]);
 if(mysqli_connect_errno()){
     
	 echo "Fallo al conectar con la base de datos";
	 
	exit();
 }
  //para buscar la contraseña 
 // mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base dedatos");
 //para imcluir los caracteres los acentos
 mysqli_set_charset($conexion,"utf8");
 //consulta de sql
// $consulta="select * from productos where NOMBREARTICULO LIKE '%$busqueda%' ";
$consulta="select * from productos where NOMBREARTICULO  LIKE '$busqueda'";

echo "$consulta<br><br>";
//para generar la consulta
 if($resultados=mysqli_query($conexion,$consulta)){
	  
	  echo "Baja procesada";
	 
	 }




 
 //para serrar la conexion
 mysqli_close($conexion);
 

	
 
 


?>