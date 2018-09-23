<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>operadores matematicos</title>
</head>

<body>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
 <p>
 <label for="num1"></label>
 <input type="text" name="num1" id="num1" >
 <label for="num2"></label>
  <input type="text" name="num2" id="num2" >
  <select name="operacion" id="operacion">
  <label for="operacion" id="operacion">
  <option>Suma</option>
  <option>Resta</option>
  <option>Multiplicacion</option>
  <option>Modulo</option>
  <option>Incremento</option>
  <option>Decremento</option>
  </select>
  </p>
  <p>
  <input type="submit" name="button" value="Enviar" onclick="prueba" >
  </p>
  </form>
  <p>&nbsp;</p>
  
  <?php
   include("calculadora.php");
   if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
	  $numero2=$_POST["num2"];
	  $operacion=$_POST["operacion"];
	  calcular($operacion);
   }
  ?> 
</body>
</html>