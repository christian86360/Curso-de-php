<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$num1=rand(1,10);
$num2=pow(5,2);
$num3=5.25;
$num="5";
//castin implicito
$resultado=(int)$num;

echo"<p>El numero es: $num1</p>";
echo"<p>El numero es: $num2</p>";
echo"<p>El numero es: ".round($num3,2)."</p>";


?>
</body>
</html>