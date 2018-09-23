<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php


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
 $consulta="INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO) VALUES ('AR44','DEPORTES','RAQUETA BADMITON')";
 //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);



 
 //para serrar la conexion
 mysqli_close($conexion);
 
 
 

?>

</body>
</html>