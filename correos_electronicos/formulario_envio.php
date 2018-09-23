<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                margin: auto;
                left: 0;
            }
            </style>
    </head>
    <body>
        <form name="formulario_contacto" method="post" action="Enviar_mail.php">
            <table width="500px">
                <tr>
                    <td>
                        <label for="nombre">Nombre:*</label>
                    </td>
                    <td>
                        <input type="text" name="nombre" maxlength="50" size="25">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="apellido">Apellido:*</label>
                    </td>
                    <td>
                        <input type="text" name="apellido" maxlength="50" size="25">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Direccion de E-mail:* </label>
                    </td>
                    <td>
                        <input type="text" name="email" maxlength="80" size="35">
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tfno">Numero de telefono: </label>
                        </td>
                        <td>
                            <input type="text" name="tfno" maxlength="25" size="35">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="asunto">Asunto:* </label>
                        </td>
                        <td>
                            <input type="text" name="asunto" maxlength="25" size="35">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="coments">Comentarios:* </label>
                        </td>
                        <td>
                            <textarea name="comentarios" maxlength="500" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" value="Enviar">
                        </td>
                    </tr>
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
