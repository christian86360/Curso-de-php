<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
$busqueda = $_GET["buscar"];
 try{
  //conexion
  $base=new PDO('mysql:hots=localhost; dbname=curso_php','root','');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $base->exec("SET CHARACTER SET utf8");
  
  $sql="SELECT NOMBREARTICULO, SECCION,PRECIO,PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO=?";
  
  $resultado=$base->prepare($sql);
  $resultado->execute(array($busqueda));
  
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	    echo"Nombre Articulo".$registro['NOMBREARTICULO']."Seccion:".$registro['SECCION'].
		"Precio".$registro['PRECIO']."Pais de origen".$registro['PAISORIGEN']."<br>";
	   
	  }
	  $resultado->closeCursor();
  
 }catch(Exception $e){
   die('Error; '.$e->getMessage());
   
 
 }finally{
 
   $base=null;
 }
  
  
?>

<body>
</body>
</html>