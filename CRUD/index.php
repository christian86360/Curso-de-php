<!DOCTYPE html>

<html>
    <head>
        <title>CRUD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        include("Conexion.php");
        /*
         $conexion=$base->query("SELECT * FROM datos_usuarios");
         $registros=$conexion->fetchAll(PDO::FETCH_OBJ);*/
        //---------------------------------------- paginacion-----
          $tamano_paginas=3;
            
            if(isset($_GET["pagina"])){
            if($_GET["pagina"]==1){
                header("Location:index.php");
            }else{
                $pagina=$_GET["pagina"];
            }
            }else{
                $pagina=1;
            }
            
            $pagina=1;
            $empezar_desde=($pagina-1)*$tamano_paginas;
            $sql_total="SELECT * FROM datos_usuarios";
            $resultado=$base->prepare($sql_total);
            $resultado->execute(array());
            
            $num_filas=$resultado->rowCount();
            
            $total_paginas=ceil($num_filas/$tamano_paginas);
            //---------------------------------------------------------------------------------
        
        
        
$registros=$base->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tamano_paginas")->fetchAll(PDO::FETCH_OBJ);

             //insertar
       if(isset($_POST["cr"])){
           $nombre=$_POST["nom"];
           $apellido=$_POST["Ape"];
           $Direccion=$_POST["Dir"];
           
           $sql="INSERT INTO datos_usuarios (Nombre,Apellido,direccion)VALUES (:nom,:ape,:dir)";
           $resultado=$base->prepare($sql);
           $resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$Direccion));
           header("Location:index.php");
       }
        
        ?>
        
        <h1>CRUD<span class="subtitulo">Create Update Delete</span></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table width="50%" border="0" align="center">
            <tr>
                <td class="primera_fila">Id</td>
                <td class="primera_fila">Nombre</td>
                <td class="primera_fila">Apellido</td>
                <td class="primera_fila">Direccion</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
            </tr>
            
            <?php
                    foreach ($registros as $persona):?>
            <tr>
                <td><?php echo $persona->Id ?></td>
                <td><?php echo $persona->Nombre ?></td>
                <td><?php echo $persona->Apellido ?></td>
                <td><?php echo $persona->direccion ?></td>
                
                <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id ?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
                <td class="bot"><a href="editar.php?Id=<?php echo $persona->Id ?>& nom=<?php echo $persona->Nombre ?>& ape=
                                   <?php echo $persona->Apellido ?>& dir=<?php echo $persona->direccion ?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>        
            </tr>
     
             <?php endforeach;?>
            
            <tr>
                <td></td>
                <td><input type="text" name="nom" size="10" class="centrado"></td>
                 <td><input type="text" name="Ape" size="10" class="centrado"></td>
                 <td><input type="text" name="Dir" size="10" class="centrado"></td>
                 <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td> 
            </tr>
            <tr><td><?php
        //----------------------------Paguinacion---------------------------------------
        for($i=1; $i<=$total_paginas;$i++){
            
            
            echo"<a href='?pagina=".$i."'>".$i."</a> ";
        }
        ?></td></tr>
        </table>
        </form>
        
        
        
    </body>
</html>
