<?php

$comida = 'Pizza';

 echo $comida;

 con . concatenas

 echo 'A nosotros nos gusta la '.$comida.' casi diario';

 Con "" se puede imprimir el valor de la variable

 echo "A nosotros nos gusta la '.$comida.'casi diario <br>";

 echo "A nosotros nos gusta \"gusta\" la comida casi diario <br>";

 echo "A nosotros nos \"gusta\" la {$comida}s casi diario <br>";


  $mensaje = "Hola pedro tienes 34 años";

  echo substr($mensaje,6,4); echo "<br>";

  echo strpos($mensaje,'pedro');


 $nombre = 'Pedro';
 $edad=34;
 $texto = "Hola %s tienes %d años";

 echo sprintf($texto,$nombre,$edad);


?>