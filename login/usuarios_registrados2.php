<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        session_start();
        
        if(!isset($_SESSION["usuario"])){
            header("Location:login.php");
        }
        ?>
            <h1>Bienvenidos usuarios<h1>
                    <?php
                    echo "Usuario: " . $_SESSION["usuario"] . "<br></br>";
                    ?>
                      <p><a href="cierre.php">Cierre Sesion</a></p>
                    <p>Esta informacion es para usuarios registrados</p>
                    <p><a  href="usuarios_registrados.php">  Volver</a> </p>
                    
        
    </body>
</html>