<?php

require 'config.php';

class conexion {

    protected $conexion_db;

    public function Conexion() {

        try {
            $this->conexion_db = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        } catch (Exception $e) {
            echo 'La linia de error e:' . $e->getLine();
        }
    }

    /*

      }
      $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
      //por si la conexion da error
      if($this->conexion_db->connect_errno){
      echo "Fallo al conectar a MySql:". $this->conexion_db->connect_error;
      return;

      }
      $this->conexion_db->set_charset(DB_CHARSET);
      }
     */
}
