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
                    <p><a  href="usuarios_registrados2.php"> Paguina2</a> </p>    
                    <p><a  href="usuarios_registrados3.php"> Paguina3</a> </p>
                    <p><a  href="usuarios_registrados4.php"> Paguina4</a> </p>
        
    </body>
</html>
