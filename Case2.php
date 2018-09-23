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
	 class Camion{
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
			
			echo " El color del camion ".$nombre_coche."  es: ".$this->color."<br>";  
		  }
	
	 }
	 
	 ?>