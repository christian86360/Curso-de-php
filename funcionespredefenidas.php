<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  /*
  $palabra="Juan";
  //para combertir en minusculas
  echo(strtolower("<p>".$palabra."</p>"));
  //para combertir en mayusculas 
  echo(strtoupper("<p>".$palabra."</p>"));
  
  
  function suma($num1,$num2){
	  $resultado=$num1+$num2;
	  
	  return $resultado;
	  
	  }
	  
	 echo( suma(1,2));
  */
  
  function frase_mayus($frase,$conversion=true){
	  $frase=strtolower($frase);
	  if($conversion==true){
		
		$resultado=ucwords($frase);
		  
	  }else{
		  $resultado=strtoupper($frase);
		  }
	   return $resultado;
	  }
	
	echo(frase_mayus("esto es una funcion"));
  



?>
</body>
</html>