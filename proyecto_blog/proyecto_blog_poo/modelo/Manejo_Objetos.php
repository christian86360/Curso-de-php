<?php
include_once  ("Objeto_blog.php");

class Manejo_Objetos{
    
    
    private $conexion;
    
    public function __construct($conexion) {
        
        $this->setConexion($conexion);
    }
    
    public function  setConexion(PDO $conexion){
        $this->conexion=$conexion;
    }
    
    public function getContenidoPorfecha(){
        $matrix=array();
        $contador=0;
        
        $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY Fecha");
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            $blog=new Objeto_blog();
            $blog->setId($registro["Id"]);
            $blog->setTitulo($registro["Titulo"]);
            $blog->setFecha($registro["Fecha"]);
            $blog->setComentario($registro["Comentario"]);
            $blog->setImagen($registro["Imagen"]);
            
            $matrix[$contador]=$blog;
            $contador++;
            
        }
        return $matrix;
        
        
    }
    
    public function insertaContenido(Objeto_blog $blog){
        
        $sql="INSERT INTO contenido (Titulo,Fecha,Comentario,Imagen)VALUES('".$blog->getTitulo()."','".$blog->getFecha()."','".$blog->getComentario()."','".$blog->getImagen()."')";
        
        $this->conexion->exec($sql);
        
        
    }
    
    
    
    
    
    
}
