<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Constantes</title>
</head>

<body>
<?php
   //declaracion de una constante String
   define("AUTOR","Christian", true);
   
   
   echo AUTOR;
   echo "El autor es: ".AUTOR;
   
   echo "<p>La linia de esta instrucion es: ".__LINE__."</p>";
   
   echo "Estamos trabajado con: ".__FILE__;

?>
</body>
</html>