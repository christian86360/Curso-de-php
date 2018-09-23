<?php


class Conectar{

    public static function conexion(){
        try{
            $conexion=new PDO('mysql:host=localhost; dbname=pruebas','root','');
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
            
            
            
            
        } catch (Exception $ex) {
            die("Error".$ex->getMessage());
            echo "Linia del error". $ex->getLine();
        }
        return $conexion;
    }
    
    
    
}
