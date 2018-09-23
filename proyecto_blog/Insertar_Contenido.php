<?php

$miconexion= mysqli_connect("localhost", "root", "", "bbddBlog");

//conprobar conexion
if(!$miconexion){
    echo "La conexion ha fallado". mysqli_error();
    exit();
}

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
        $destino_de_ruta="imagenes/";
        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
        echo "El archivo".$_FILES['imagen']['name']."Se ha copiado en el directorio de imagen";
    }else{
        echo "El archivo no se ha podido copiar al directorio de imagenes";
    }
}

$eltitulo=$_POST['campo_titulo'];
$lafecha=date("Y-m-d H:i:s");
$elcomentario=$_POST['area_comentarios'];
$laimagen=$_FILES['imagen']['name'];

$miconsulta="INSERT INTO contenido(Titulo,Fecha,Comentario,Imagen) VALUES ('".$eltitulo ."','".$lafecha."','".$elcomentario."','".$laimagen."')";

$resultado= mysqli_query($miconexion, $miconsulta);
mysqli_close($miconexion);

echo "<br/>Se ha agregado el comentario con exito.<br/><br/>";
?>
<a href="Formulario.php">Añadir nueva entrada</a><br/>
<a href="MostrarBlog.php">Ver Blog</a>

