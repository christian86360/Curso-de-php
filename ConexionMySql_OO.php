<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

   $conexion= new mysqli("localhost","root","","curso_php");
   
    if($conexion->connect_errno){
		echo "Fallo la conexion".$conexion->connect_errno;
		
		}
		
		//mysqli_set_charset($conexion,"utf8");

    $conexion->set_charset("utf8");
	$sql="SELECT * FROM productos";
	
	$resultado=$conexion->query($sql);
	
	if($conexion->errno){
		die($conexion->error);
		}
	while($fila=$resultado->fetch_assoc()){
		 
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
	$conexion->close();	
	

?>

</body>
</html>