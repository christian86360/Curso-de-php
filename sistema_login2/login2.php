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
               
                session_start();
                
                $_SESSION["usuario"]=$_POST["login"];
              //  header("Location:usuarios_registrados.php");
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
       if( !isset($_SESSION["usuario"])){
       include ("formulario.html");
       }else{
           echo 'Usuario:'.$_SESSION["usuario"];
       }
       ?>
       
        <h2>CONTENIDO DE LA WEB</h2>
        <table width="800" border="0">
            <tr>
                <td><img src="imagenes/" width="300" height="166"</td>
                <td><img src="imagenes" width="300" height="197"</td>
            </tr>
         </table>
        
      
    </body>
</html>
