<?php //Inicia codigo php
$inicio = microtime(true);//En la variable $inicio guarda el momento exacto en el que inicia la tarea 
sleep(3);//Hace que el programa se detenga por unos segundos. Espera tres segundos antes de continuar
$fin = microtime(true); //en la variable $fin guarda el momento exacto en el que se termino la tarea 
$tiempo = $fin - $inicio; //En la variable de tiempo se guarda la diferencia entre el fin y el inicio de la tarea 
echo"Tarea 2 completada en " ,round($tiempo,2). "segundos";//Se muestra la cantidad de segundos que tardo la tarea en ejecutarse
?>
