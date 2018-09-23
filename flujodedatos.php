<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>flujo de datos</title>
</head>

<?php
function imprimir(){
print "Hola mundo <br>";
}

imprimir();

include("datosp.php");

?>

<?php

echo"Este es el primer mensaje <br>";
function dameDatos(){
	
	echo "Este es el mensaje de la funcion <br>";
	
}


 dameDatos();
 dameDatos();
 dameDatos();

echo"Este es el tercer mensaje <br>";
?>

<body>
</body>
</html>