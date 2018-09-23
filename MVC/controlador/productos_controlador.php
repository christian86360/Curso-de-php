<?php

require_once("modelo/Productos_modelo.php");
//instanciamos la clase
$productos=new Productos_modelo();
$matrizProductos=$productos->get_productos();


require_once("vista/Productos_view.php");





