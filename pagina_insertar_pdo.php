<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $busqueda_cart = $_POST["c_art"];
        $busqueda_seccion = $_POST["seccion"];
        $busqueda_nart = $_POST["n_art"];
        $busqueda_presio = $_POST["presio"];
        $busqueda_fecha = $_POST["fecha"];
        $busqueda_importado = $_POST["imortado"];
        $busqueda_porig = $_POST["p_orig"];


        try {

            //conexion de base de datos orientada a objetos
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            $base->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            //$sql = "SELECT NOMBREARTICULO , SECCION, PRESIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO=:SECC  AND PAISDEORIGEN=:PORIG";
            $sql = "INSERT INTO PRODUCTOS (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISORIGEN  "
                    . "VALUES (:c_art, :seccion, :n_art, :presio, : fecha, :importado, :p_orig)";


            //$resultado = $base->prepare($sql);
            $resultado->execute(array(":c_art" => $busqueda_cart, ":seccion" => $busqueda_seccion, ":n_art" => $busqueda_nart, ":presio" => $busqueda_presio,
                ":fecha" => $busqueda_fecha, ":importado" => $busqueda_importado, ":p_orig" => $busqueda_porig));

            echo "Registro insertado";
            $resultado->closeCursor();
        } catch (Exception $ex) {
            die('Error:' . $ex->GetMessage());
        } finally {
            $base = null;
        }
        ?>

    </body>
</html>
