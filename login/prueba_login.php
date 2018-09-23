<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
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
                header("Location:usuarios_registrados.php");
            } else {
               header("location:login.php");
            }
        } catch (Exception $ex) {
            die("Error: " . $e->getMessage());
        }
        ?>
    </body>
</html>
