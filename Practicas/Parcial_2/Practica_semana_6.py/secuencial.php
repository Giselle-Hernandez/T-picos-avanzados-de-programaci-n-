<?php //Inicia php
$Tiempoinicio = microtime(true); //En la variable $Tiempoinicio se guarda el tiempo exacto en el que inicio la accion
sleep(3); //Hace que el programa se retrase el programa unos segundos
sleep(3);//Hace que el programa se retrase el programa unos segundos
$Tiempofin = microtime(true); //En la variable $Tiempofin se guarda el tiempo exacto en el que se termino la accion
$duracion = $Tiempofin - $Tiempoinicio; //En la variable $duracion se guarda la diferencia entre el tiempo final y el tiempo de inicio
echo"Ejecucion secuencial completada en " .round($duracion,2). "segundos"; //Muestra el tiempo de ejecucion total redondeado a 2 segundos 
?>