<?php

include("Conexion.php");

$id=$_GET["Id"];

$base->query("DELETE FROM datos_usuarios where Id='$id'");
header("Location:index.php");


