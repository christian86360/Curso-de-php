<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>



<body>
<?php

$serverName="localhost";
$connectionInfo=array("Database"=>"CINE","UID"=>"christian","PWD"=>"123","ChararcterSet"=>"UTF-8");
$con =Sqlsrv_connect($serverName,$connectionInfo);

if($conn){
 echo "Conexion establesida.<br/>";
 
}else{
	echo("Conexion no se pudo establecer.<br/>");
	
	}


?>
</body>
</html>