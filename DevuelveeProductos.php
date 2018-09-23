<?php

require "conexion_clase.php";
class DevuelveeProductos extends conexion_clase {
    
    public function  DevuelveeProductos(){
        parent::_construct();
    }
    public function get_productos($dato){
   
        $sql="Select * from productos where PAISDEORIGEN '".$dato."'";
        $sentencia= $this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
        /*$resultado=$this->conexion_db->query('Select * from productos where PAISDEORIGEN "'.$dato.'"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $resultado;*/
    }
}

