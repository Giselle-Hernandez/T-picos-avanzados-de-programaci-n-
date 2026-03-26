<?php //inicia php

$saldo = file_get_contents("recurso.txt"); //En la variable $saldo guarda lo que hay en el archivo de "recursos,txt"

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 lee saldo: $saldo\n", FILE_APPEND); //registra en el archivo log que se realizó una lectura del saldo.

sleep(2); // Simula proceso se detiene 2 segundos antes de continuar

$nuevo = $saldo - 300;// en la variable de $nuevo guarda lo que resulta de restar $saldo - 300

file_put_contents("recurso.txt", $nuevo); //en el erchivo recursos ahora pone lo que hay en la variablede $nuevo

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 escribe saldo: $nuevo\n", FILE_APPEND);//registra en el archivo log que la Tarea 1 escribió un nuevo saldo, guardando la hora y el valor actualizado

header("Location: index.php");//redirige al navegador al archivo de index.php