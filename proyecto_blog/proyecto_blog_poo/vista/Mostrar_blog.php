<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../modelo/Manejo_Objetos.php';
        try {

   $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog','root','');
   $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
   $Manejo_objetos=new Manejo_Objetos($miconexion);
   
   $tabla_blog=$Manejo_objetos->getContenidoPorfecha();
   
   if(empty($tabla_blog)){
       echo 'No hay entradas de blog aun';
   }else{
       foreach ($tabla_blog as $valor){
           echo "<h3>".$valor->getTitulo()."</h3>";
           echo "<h4>".$valor->getFecha()."</h4>";
           echo "<div style='width:400px'>";
           echo $valor->getComentario()."</div>";
           if($valor->getImagen()!=""){
           echo "<img src='../imagenes/";
           echo $valor->getImagen()."' width=300px' height='200px'/>";
           }
           echo "<hr/>";
       }
   }
        
} catch (Exception $ex) {
    die("Error: ".$ex->getMessage());
    
}
        ?>
        <br/>
        <a href="Formulario.php">Volver a la pagina de insercion</a>
    </body>
</html>
