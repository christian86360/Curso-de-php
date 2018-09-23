<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>

 table{
 
   width:50%;
   border:1px dotted #FF0000;
   margin:auto;
   
      }
	  
</style>

</head>

<body>
<?php

//nombre

 require("conexioncursophp.php");

 
 //conexion ala mysql
 $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
 
 if(mysqli_connect_errno()){
     
	 echo "Fallo al conectar con la base de datos";
	 
	exit();
 }
  //para buscar la contraseña 
 // mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base dedatos");
 //para imcluir los caracteres los acentos
 mysqli_set_charset($conexion,"utf8");
 //consulta de sql
 $consulta="select * from productos where paisdeorigen='ESPAÑA'";
 //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);



 while(($fila=mysqli_fetch_row($resultados))){ 
  
  echo"<table><tr><td>";
  echo $fila[0]." </td><td>";
  echo $fila[1]." </td><td>";
  echo $fila[2]." </td><td>";
  echo $fila[3]." </td><td>";
  echo $fila[4]." </td><td>";
  echo $fila[5]."</td><td></tr></table>";
  echo "<br>";
  echo "<br>";
 }
 
 //para serrar la conexion
 mysqli_close($conexion);
 
 /*
 
 $db_host = 'localhost';
	$db_usuario = 'root';
	$db_contraseña = '';
	$db_nombredb= 'curso_php';
	
	try{
		$DB_con = new PDO("mysql:host={$db_host};dbname={$db_nombredb}",$db_usuario,$db_contraseña);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
 */
 

?>
</body>
</html>