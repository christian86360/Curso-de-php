<?php

 echo <<<EOT
 <p>Este texto puede tener dentro "comillas" sin necesidad
 de escaparlas.</p>

 <p>Tambien procesa (remmplaza por su valor ) las $variables
 que hubiera dentro del codigo, tema que veremos proximamente.</p>

<p>Esta construccion del lenguaje llamada heredoc es ideal 
para incluir largos bloques de codigo html.</p>

EOT;


echo $codigo;
?>