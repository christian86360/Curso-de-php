<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        //creacion de una cookie con su duracion y direccion para que la leea
        setcookie("prueba","Esta es la informacion de nuestra primera cookie", time()+300,"/CursodePHP2/zona_contenidos/");
        
        ?>
    </body>
</html>
