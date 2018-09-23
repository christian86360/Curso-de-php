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
 
 $cod=$_GET["c_art"];
 $sec=$_GET["seccion"];
 $nom=$_GET["n_art"];
 $pre=$_GET["precio"];
 $fec=$_GET["fecha"];
 $imp=$_GET["importado"];
 $por=$_GET["p_orig"];
 

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
 $consulta="INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES             ('$cod','$sec','$nom','$pre','$fec','$imp','$por')";          
 //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);
   
   if($resultados==false){
	  echo"Fallo al registrar";
   }else{
   
     echo"Registro guardado";
	 
	 //cracin de la tabla
	 echo"<table><tr><td>$cod</td></tr>";
	  
	 echo "<tr><td>$sec</td></tr>";
	 echo "<tr><td>$nom</td></tr>";
	 echo "<tr><td>$pre</td></tr>";
	 echo "<tr><td>$fec</td></tr>";
	 echo "<tr><td>$imp</td></tr>";
	 echo "<tr><td>$por</td></tr></table>";
	 
   }
//para serrar la conexion
 mysqli_close($conexion);
 
 
 

?>

</body>
</html>