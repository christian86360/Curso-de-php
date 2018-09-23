<?php
if(!$_COOKIE["idioma_seleccionado"]){
    
    header("Location:inicio.php");
    
    
    
}else if($_COOKIE["idioma_seleccionado"]=="es"){
    header("Location:spanish.php");
    
    
}else if($_COOKIE["idioma_seleccionado"]=="in"){
    header("Location:englis.php");
    
}




?>