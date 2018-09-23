<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE["prueba"])){
        echo $_COOKIE["prueba"];
        }else{
            echo "la Cookie no se ha creado";
        }
        ?>
    </body>
</html>
