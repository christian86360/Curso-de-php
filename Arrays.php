<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  //arrays
  //$semana[0]="Lunea";
  //$semana[1]="Martes";
  //$semana[2]="Miercoles";
  //$semana=array("Lunes","Martes","Miercoles","Jueves");
    //array asociativo
  //$datos=1;
  //para saber si es un array
  /*
  if(is_array($datos)){
     
	  echo"Es un array";
  }else{
	  echo "no es un array";
  }
     $datos=array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
	 //para seguir agregando al array datos
	 $datos["Pais"]="España"
	 foreach($datos as $clave=>$valor){
	     echo"A $clave le corresponde $valor <br>";
	 }
	 
	 
	 
  
  $semana[0]="Lunea";
  $semana[1]="Martes";
  $semana[2]="Miercoles";
  $semana[]="Viernes";
   for($i=0;$i<count($semana);$i++){
   
   echo $semana[$i]." <br>";
  }
  */  

  $semana=array("Lunes","Martes","Miercoles");
  //para ordenar el array
  sort($semana);
  for($i=0;$i<count($semana);$i++){
      
  echo $semana[$i]." <br>";
  
  }
?>
</body>
</html>