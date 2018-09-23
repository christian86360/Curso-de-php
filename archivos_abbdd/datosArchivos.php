<?php

//recibimos los datos de la imagen
$nombre_archivo=$_FILES['archivo']['name'];
$tipo_achivo=$_FILES['archivo']['type'];
$tamano_archivo=$_FILES['archivo']['size'];
      
//controla el tamaño de el achivoS
if($tamano_archivo<=3000000){
    //controla el tipo de archivo  
        
//ruta d la carpeta destino servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/subidas/';
//Movemos la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino.$nombre_archivo);
    
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

$archivo_objetivo=fopen($carpeta_destino . $nombre_archivo, "r");
$contenido=fread($archivo_objetivo, $tamano_archivo);
//para que agrege las barras 
$contenido=addslashes($contenido);
fclose($archivo_objetivo);


//";
$sql="INSERT INTO archivos (id,Nombre,Tipo,Contenido) Values (0,'$nombre_archivo','$tipo_achivo','$contenido') ";
$resultado=mysqli_query($conexion,$sql);  

if(mysqli_affected_rows($conexion)>0){
    echo 'Se ha insertao el registro con exito';
}else{
    echo 'No se ha podido insertar el registro';
}

