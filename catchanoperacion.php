<?PHP
    session_start();
 
    $Valor1 = rand(1,99);
    $Valor2 = rand(1,99);
    $_SESSION["resultado"] = $Valor1 + $Valor2;
 
    $Imagen = imagecreatetruecolor(120, 30);
    $Color_Fondo = imagecolorallocate($Imagen, 255, 255, 255);
    imagefill($Imagen, 0, 0, $Color_Fondo);
    $Color_Texto = imagecolorallocate($Imagen, 0, 0, 0);
    imagestring($Imagen, 4, 5, 5,  $Valor1." + ".$Valor2." =", $Color_Texto);
 
    header('Content-Type: image/png');
 
    imagepng($Imagen);
    imagedestroy($Imagen);
?>