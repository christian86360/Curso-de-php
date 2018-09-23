<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h1,h2{text-align: center;
            }
            table{
                width: 25%;
                background-color:#FFC;
                margin: auto;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: center;
                padding: 10px;
            }
            td{
                text-align: center;
                padding: 10px;
            }
            
        </style>
    </head>
    <body>
         <?php
         
         $autenticado=false;
         if (isset($_POST["enviar"])){
            
         try {
            $base = new PDO("mysql:host=localhost; dbname=login", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select * from usuarios_pass where USUARIOS= :login and PASSWORD= :password";
            $resultado = $base->prepare($sql);
            $login = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));
            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);
            $resultado->execute();

            $numero_registro = $resultado->rowCount();

            if ($numero_registro != 0) {
               
                $autenticado=true;
                if(isset($_POST["recordar"])){
                    setcookie("nombre_usuario",$_POST["login"], time()+86400);
                }
               
            } else {
               //header("location:login.php");
               echo 'Error. Usuario o contraseña incorrectos';
            }
        } catch (Exception $ex) {
            die("Error: " . $e->getMessage());
        }
         }
        ?>
    </body>
       <?php
     if($autenticado==false){
         if(!isset($_COOKIE["nombre_usuario"])){
             include ("formulario.html");
         }
     }
     
     //
     if(isset($_COOKIE["nombre_usuario"])){
         echo '¡Hola:'.$_COOKIE["nombre_usuario"]."!";
         
     }else if($autenticado==true){
         echo '¡Hola:'.$_POST["login"]."!";
         
     }
     
         
       ?>
       
        <h2>CONTENIDO DE LA WEB</h2>
        <table width="800" border="0">
            <tr>
                <td><img src="imagenes/" width="300" height="166"</td>
                <td><img src="imagenes" width="300" height="197"</td>
            </tr>
         </table>
        <?php
        if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
            include("zona_registrados.html");
            
        }
        
        ?>
      
    </body>
</html>
