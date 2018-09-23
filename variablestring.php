<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>

.resaltar{
  color:#F00;
  font-weight:bold;
}

</style>

</head>

<body>
<?php
 //$bombre="Christian";
 //echo "<p class='resaltar'> Esto es un ejemplo de frase </p>";
 //echo '<p class="resaltar"> Esto es un ejemplo de frase </p>';
 //echo "<p class=\"resaltar\"> Esto es un ejemplo de frase </p>";
 //echo"<p class='resaltar'>Hola $nombre</p>";
 $variable1="Casa";
 $variable2="CASA";
              //strcmp para compara las mayusculas
 // $resultado=strcmp($variable1,$variable2);//devuelve 1 si no son iguales y 0 si son iguales
   //strcasecmp para comparar sidice lo mismo on que esten en mayusculas
  $resultado=strcasecmp($variable1,$variable2);
  //echo "El resultado es ".$resultado;
   if($resultado){
	   
	   echo " No concide";
   }else{
	   echo "Conside";
   }
?>

</body>
</html>