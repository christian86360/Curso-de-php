<?php
header("Content-type: image/png");
$im = @imagecreate(110, 32);
$color_fondo = imagecolorallocate($im, 102,102,153);
$color_texto = imagecolorallocate($im, 255,255,255);
session_start();
$valor = '';
for($x = 15; $x <= 95; $x += 20) {
     $valor .= ($num = rand(0, 9));
     imagechar($im, rand(3, 5), $x, rand(2, 14), $num, $color_texto);
}
imagepng($im);
imagedestroy($im);
$_SESSION['img_key'] = $valor;
?>