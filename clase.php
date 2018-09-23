<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
/*
 class Coche{
	  //propiedades
	  var $ruedas;
	  var $color;
	  var $motor;
	  
	  
	  //constructor
	  function Coche(){
		  $this->ruedas=4;
		  $this->color="";
		  $this->motor=1600;
		  
	  }
	  function arrancar(){
		  echo "Estoy arracando<br>";
	  }
	  function girar(){
		    echo "Estoy girando<br>";
		  }
	  
	  function frenar(){
		    echo "Estoy frenando<br>";
		  }
		  
		  function estable_color($color_coche,$nombre_coche){
			$this->color=$color_coche;
			
			echo " El color del coche ".$nombre_coche."  es: ".$this->color."<br>";  
		  }
	
	 }
	 */
	 //instanciar de la clase Coche
	 //$renault=new Coche();
     //$mazda=new Coche();
	 //$seat=new Coche();
	 //llamada a un metodo de la clase
	 /*
	 $renault->arrancar();
	 $renault->frenar();
	 $renault->girar();
	 $renault->ruedas;
	 
	 $mazda->arrancar();
	 $mazda->frenar();
	 $mazda->girar();
	
	 
	 $renault->estable_color("Rojo","Renault");
	 $seat->estable_color("Azul","Seat");
	*/ 
	include("Case2.php");

  $mazda=new Coche();
  
  $pegaso=new Camion();
  
  echo "El mazda tiene: ".$mazda->ruedas." ruedas<br>";
  echo"El pegaso tiene: ".$pegaso->ruedas." ruedas<br>"; 
?>


</body>
</html>