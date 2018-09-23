<?php

require_once("modelo/Personas_modelo.php");
//instanciamos la clase
$persona=new Productos_modelo();
$matrizPesonas=$persona->get_personas();


require_once("vista/Personas_view.php");





