<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

 class Compra_vehiculo{
  private $precio_base;
  private static $ayuda=0;
  
  function Compra_vehiculo($gama){
  if($gama=="urbano"){
	  $this->precio_base=10000;
	  
  }else if($game=="compacto"){
    $this->precio_base=20000;
  }
  else if($gama=="berlin"){
   $this->precio_base=30000;
  }
  }
  function climatizador(){
	  $this->precio_base+=2500;
	  }
	  function tapiceria_cuero($color){
	   if($color=="blanco"){
	    $this->precio_base+=3000;
	   }
	   else if($color=="beige"){
	   $this->precio_base+=3500;
	   }
	   else{
	      $this->precio_base0=5000;
	   }
	  }
	  
	  function precio_final(){
		                               //para acceder ala variable statica
		 $valor_fina=$this->precio_base-self::$ayuda;
		  
	   return $valor_fina;
	  }
	  //metodo statico
	static function ayuda_gobierno(){
		 
		 if(date("d-m-y")>"01-05-18"){
		 
		 self::$ayuda=4500;
		 }
		}  
}

//instancia de la clase
$compra_Antonio=new Compra_vehiculo("compacto");
 //Compra_vehiculo::$ayuda=24;


Compra_vehiculo::ayuda_gobierno();
$compra_Antonio->climatizador();


$compra_Antonio->tapiceria_cuero("blanco");

echo $compra_Antonio->precio_final() . "<br>";

$compra_Ana=new Compra_vehiculo("compacto");

$compra_Ana->climatizador();
$compra_Ana->tapiceria_cuero("rojo");

echo $compra_Ana->precio_final();






?>
</body>
</html>