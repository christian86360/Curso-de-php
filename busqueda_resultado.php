<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php

 function ejecuta_consulta($labusqueda){
  //almacenando lo que el usuario va a buscar
 //$busqueda=$_GET["buscar"];

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
 $consulta="select * from productos where NOMBREARTICULO LIKE '%$labusqueda%' ";
 //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);



 while($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC)){ 
  
  echo"<table><tr><td>";
  echo $fila['CODIGOARTICULO']."</td><td>";
  echo $fila['NOMBREARTICULO']."</td><td>";
  echo $fila['SECCION']." </td><td>";
  echo $fila['IMPORTADO']."</td><td>";
  echo $fila['PRECIO']."</td><td>";
  echo $fila['PAISDEORIGEN']."</td><td></tr></table>";
  
  echo "<br>";
  echo "<br>";
 }
 
 //para serrar la conexion
 mysqli_close($conexion);
 }
 
 

?>

</head>

<body>
<?php
$mibusqueda=$_GET["buscar"];
$mipag=$_SERVER["PHP_SELF"];

 if($mibusqueda!=NULL){
 
  ejecuta_consulta($mibusqueda);
 }else{
     echo("<form action='".$mipag."' method='get'>
   <label>Buscar:<input type='text' name='buscar'></label>
   <input type='submit' name='enviando' value='Dale!'>
   </form>");
 } 
 

?>
 
  

</body>
</html>