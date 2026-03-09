<?php //Inicia codigo php
$Tiempoinicio = microtime(true);//En la variable $Tiempoinicio guarda el momento exacto en el que inicia la tarea 
sleep(3);//Hace que el programa se detenga por unos segundos. Espera tres segundos antes de continuar
$Tiempofin = microtime(true); //en la variable $Tiempofin guarda el momento exacto en el que se termino la tarea 
$duracion = $Tiempofin - $Tempoinicio; //En la variable de duracion se guarda la diferencia entre el fin y el inicio de la tarea 
echo"Tarea 2 completada en " .round($duracion,2). "segundos";//Se muestra la cantidad de segundos que tardo la tarea en ejecutarse
?>
