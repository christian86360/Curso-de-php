<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Actualizar</h1>
        
        <?php 
        
        include ("Conexion.php");
        
        if(!isset($_POST["bot_actualizar"])){
        
        $Id=$_GET["Id"];
        $nom=$_GET["nom"];
        $ape=$_GET["ape"];
        $dir=$_GET["dir"];
        }else{
            
            $Id=$_POST["id"];
            $nom=$_POST["nom"];
            $ape=$_POST["ape"];
            $dir=$_POST["direccion"];
            
            $sql="UPDATE datos_usuarios SET Nombre=:miNom, Apellido=:miApe, direccion=:miDir WHERE Id=:miId";
            
            $resultado=$base->prepare($sql);
       $resultado->execute(array(":miId"=>$Id, ":miNom"=>$nom,":miApe"=>$ape,":miDir"=>$dir));
            
            header("Location:index.php");
            
        }        
        
        
        
        
        
        ?>
        
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <table width="25%" border="0" align="center">
                <tr>
                    <td></td>
                    <td><label for="id"></label>
                        <input type="hidden" name="id" id="id" value="<?php echo $Id ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                   <td><label for="nom"></label>
                       <input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><label for="ape"></label>
                    <input type="text" name="ape" id="ape" value="<?php echo $ape ?>"></td>
                
                </tr>   
                <tr>
                    <td>Direccion</td>
                    <td><label for="direccion"></label>
                        <input type="text" name="direccion" id="direccion" value="<?php echo $dir ?>"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Atualizar"></td>
                </tr>
               

               
            </table>
        </form>
    </body>
</html>
