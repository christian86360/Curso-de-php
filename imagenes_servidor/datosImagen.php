<?php

//recibimos los datos de la imagen
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamano_imagen=$_FILES['imagen']['size'];
      
//controla el tamaño de el achivo
if($tamano_imagen<=1000000){
    //controla el tipo de archivo  
    if($tipo_imagen=='image/jpeg'||$tamano_imagen=='image/jpg'||$tamano_imagen=='image/png'||$tipo_imagen=='image/gif'){    
//ruta d la carpeta destino servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/subidas/';
//Movemos la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
    

    }else{
        echo 'Solo se pueden subir imagen jpg/jpeg/png/gif';
    }

    }else{
    echo "El tamaño es demaciado grande";
}



//CONEXION ALA BASE DE DATOS

require ("datos_conexion.php");
$conexion= mysqli_connect($db_host, $db_usuario, $db_contra);
if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encontro la BBDD");
mysqli_set_charset($conexion, "utf8");
//$sql="INSERT INTO productos (FOTO) VALUES ('$nombre_imagen')";
$sql="UPDATE productos SET FOTO='$nombre_imagen'  WHERE CODIGOARTICULO='AR01'";
$resultado=mysqli_query($conexion,$sql);        

