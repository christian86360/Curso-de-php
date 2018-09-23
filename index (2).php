<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
   
        
        
        <?php
        
        $busqueda_sec=$_GET["seccion"];
         $busqueda_porig=$_GET["p_orig"];
        try {

            //conexion de base de datos orientada a objetos
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            $base->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $sql = "SELECT NOMBREARTICULO , SECCION, PRESIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO=:SECC  AND PAISDEORIGEN=:PORIG";

            $resultado = $base->prepare($sql);
            $resultado->execute(array(":SECC"=>$busqueda_sec,"PORIG"=>$busqueda_porig));

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "Nombre Articulo" . $registro['NOMBREATICULO'] . "Seccion:" . $registro['SECCION'] .
                "Precio" . $registro['PRECIO'] . "Pais de Origen:" . $registro['PAISDEORIGEN'] . "<br>";
            }
            $resultado->closeCursor();
        } catch (Exception $ex) {
            die('Error:' . $ex->GetMessage());
        } finally {
            $base = null;
        }
        ?>
    </body>
</html>
