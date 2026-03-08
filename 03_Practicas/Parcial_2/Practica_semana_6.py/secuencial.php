<?php //Inicia php
$inicio = microtime(true); //En la variable $inicio se guarda el tiempo exacto en el que inicio la accion
sleep(3); //Hace que el programa se retrase el programa unos segundos
sleep(3);//Hace que el programa se retrase el programa unos segundos
$fin = microtime(true); //En la variable $fin se guarda el tiempo exacto en el que se termino la accion
$tiempoTotal = $fin - $inicio; //En la variable $tiempoTotal se guarda la diferencia entre el tiempo final y el tiempo de inicio
echo"Ejecucion secuencial completada en " .round($tiempoTotal,2). "segundos"; //Muestra el tiempo de ejecucion total redondeado a 2 segundos 
?>