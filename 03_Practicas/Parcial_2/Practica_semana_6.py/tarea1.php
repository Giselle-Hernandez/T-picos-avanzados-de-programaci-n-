<?php //Inicia codigo php
$inicio = microtime(true); //Guarda el momento exacto en el que empieza la tarea en la variable $inicio
sleep(3); //Hace que el programa se detenga por unos segundos. Espera 3 segundos antes de continuar 
$fin = microtime(true); //Guarda la hora exacta cuando termina la tarea
$tiempo = $fin - $inicio; //En la variable tirmpo se guardan los segundos que duro la ejecucion
echo"Tarea 1 completada en " ,round($tiempo,2). "segubdos"; //Muestra el tiempo que tardo la ejecucin en segundos y redondeando a dos digitos 
?> 