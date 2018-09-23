<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE["idioma_seleccionado"])){
             if($_COOKIE["idioma_seleccionado"]=="es"){
    header("Loction:spanish.php");
    
}else if($_COOKIE["idioma_seleccionado"]=="in"){
    header("Location:englis.php");
    

            
        }
        }
        
        ?>
        <table  width="25%" border="0" align="center">
            <tr>
                <td colspan="2" align="center"><h1>Elige idioma</h1></td>
                
            </tr>
            <tr>
                <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/mexico.jpg"width="90" height="60"></a></td>
                <td align="center"><a href="creaCookie.php?idioma=in"><img src="img/us.png"width="90" height="60"></a></td>
        </tr>
        </table>
    </body>
</html>
