<?php

// Arreglos Indexados

  $nombres = array('pedro','julio','sofia');

  echo $nombres[2];

 for ($i=0; $i <=2 ; $i++) { 
     echo $nombres[$i];

 }

 for ($i=0; $i < sizeof ($nombres) ; $i++) { 
     echo $nombres[$i];
 }

 foreach ($nombres as $nombre) {
     echo $nombre;
 }

 // Arreglos Asociativos

  $persona = array('nombre' => 'Pedro', 'apellidop' => 'espinosa', 'apellidom' => 'esparza');

  print_r($persona);

  $persona['apellidop']='Rios';

  echo $persona['apellidop'];

  foreach ($persona as $key => $value) {
      echo "El key es $value";
  }




// // Arreglos Multidimencional


 $agenda = array(
     'A'=>array('Alondra','Antonio'),
     'B'=>array('Bernardo','Blanca')
 );

 echo $agenda['A'][1];

 foreach ($agenda as $key => $nombre) {
    
     for ($i=0; $i <sizeof($nombre) ; $i++) { 
         echo "En la letra $key se encuentra $nombre[$i]";
     }
 }


?>