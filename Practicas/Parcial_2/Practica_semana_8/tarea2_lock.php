<?php //inicia php

$archivo = "recurso.txt";//Esta creando una variable llamada $archivo y le asigna el texto "recurso.txt".

// Abrir archivo en modo lectura/escritura
$fp = fopen($archivo, "r+");  //Crea la variable $fp que almacena la apertura del archivo "recursos,php" para leer y escribir

// 🔒 BLOQUEO EXCLUSIVO (evita que otro proceso entre)
flock($fp, LOCK_EX); //Bloquea el archivo que se guardo en la variable $fp de manera exclusiva 

// Leer saldo actual
$saldo = fread($fp, filesize($archivo)); //lee el contenido completo de un archivo y lo almacena en la variable $saldo

// Registrar lectura en log
file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND); //registra en el archivo log que se realizó una lectura del saldo.

// Simular proceso
sleep(2);//espera dos segundos antes de continuar con el proceso

// Calcular nuevo saldo
$nuevo = $saldo - 500; //en la variable $nuevo se guarda el resultado de restarle 500 a lo que hay en la variable de $saldo

// Limpiar archivo antes de escribir
ftruncate($fp, 0);//Borra todo el contenido del archivo antes de escribir el nuevo saldo
rewind($fp);//resetea el puntero del archivo al inicio

// Escribir nuevo saldo
fwrite($fp, $nuevo);////Actualiza el archivo con el nuevo saldo

// Registrar escritura en log
file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 (LOCK REAL) escribe saldo: $nuevo\n", FILE_APPEND);//registra en el archivo log que la Tarea 2 escribió un nuevo saldo, guardando la hora y el valor actualizado

// 🔓 Liberar bloqueo
flock($fp, LOCK_UN);//Libera el bloqueo del aechivo 

// Cerrar archivo
fclose($fp);//cierra correctamente el archivo $fp

// Regresar a la página principal
header("Location: index.php");//Redirige al navegador al index.php