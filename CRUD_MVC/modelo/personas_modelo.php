<?php

class Personas_modelo{
    
    private $db;
    private $personas;
    
    public function __construct(){
         
        require_once("modelo/conectar.php");
        $this->db= Conectar::conexion();
        $this->personas=array();
        
      }
    
public function get_personas(){
    require("paguinaciion.php");
    
    $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tamano_paginas");
    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
        
        $this->personas[]=$fila;
    }
    return $this->personas;
    
}

    
}

