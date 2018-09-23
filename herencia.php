<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php
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
	 
	 //////////
	 class Camion extends Coche{
	  //propiedades
	  var $ruedas;
	  var $color;
	  var $motor;
	  
	  
	  //constructor
	  function Camion(){
		  $this->ruedas=8;
		  $this->color="";
		  $this->motor=2600;
		  
	  }
	  //sobre escritura del metodo
	    function estable_color($color_coamion,$nombre_camion){
			$this->color=$color_camion;
			
			echo " El color del camion ".$nombre_camion."  es: ".$this->color."<br>";  
		  }
		  function arrancar(){
		 //ejecuta todo el metodo de la clase coche
		 parent::arrancar();
		 echo "Camion arrancando";
		 }
	  
	  
	  
	  
	  
	 }
	 
	 $ford=new Camion();
	 
	 echo $ford->arrancar();
	 echo $ford->estable_color("Azu<br>");
	 echo $ford->arrancar();
	 ?>




</body>
</html>