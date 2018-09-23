<?php

if($_POST["enviando"]){
$con=$_POST["con"];
$nombre=$_POST["nombre_usuario"];


 switch(true){
	 case  $nombre=="Juan" && $con==123:
	  echo "Usuario autorizado. Hola Juan";
	  break;
	  
	  case $nombre=="MAria" && $con==123:
	   echo "Usuario autorizado. hola Maria";
	   break;
	   
	   case $nombre=="Christian" && $con==123:
	    echo "Usuario autorizado . hola Christian";
		break;
		
		default:
		echo "Usuario no autorizado";
   }

}


?>