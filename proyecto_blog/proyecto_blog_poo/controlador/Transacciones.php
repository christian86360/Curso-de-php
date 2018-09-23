<?php

include_once("../modelo/Objeto_blog.php");
include_once("../modelo/Manejo_Objetos.php");

try {

   $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog','root','');
   $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



if($_FILES['imagen']['error']){
    
    switch ($_FILES['imagen']['error']){
        case 1: //Error exceso de tamaño de archivo en php
            echo "El tamaño del servidor excede lo permitido por el servidor";
            break;
        case 2:
            echo "El tamaño del archivo excede 2 MB";
            break;
        case 3:
            echo "El envio de archivo se interrumpió";
            break;
        case 4:
            echo "No se ha enviado ningún archivo";
            break;
    }
}else{
    echo "Entrada subida correctamente</br>";
    if((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
        $destino_de_ruta="../imagenes/";
        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
        echo "El archivo".$_FILES['imagen']['name']."Se ha copiado en el directorio de imagen";
    }else{
        echo "El archivo no se ha podido copiar al directorio de imagenes";
    }
}

$Manejo_objetos=new Manejo_Objetos($miconexion);
$blog=new Objeto_blog();

$blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
$blog->setFecha(Date("Y-m-d H:i:s"));
$blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
$blog->setImagen($_FILES['imagen']['name']);

$Manejo_objetos->insertaContenido($blog);
echo "<br/> Entrada de blog agregada con exito <br/>";


} catch (Exception $ex) {
    die("Error: ".$ex->getMessage());
    
}

