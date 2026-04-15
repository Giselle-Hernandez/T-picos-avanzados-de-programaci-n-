<?php //inicia php

$archivo = "recurso.txt";//Esta creando una variable llamada $archivo y le asigna el texto "recurso.txt".
$fp = fopen($archivo, "r+"); //Crea la variable $fp que almacena la apertura del archivo "recursos,php" para leer y escribir
//La funcvcion fopen($archivo, "r+"); es para abrir un archivo, el primer parametro es la ruta del archivo y el segundo es la forma en la que se abre el archivo

// BLOQUEO REAL
flock($fp, LOCK_EX); //Bloquea el archivo que se guardo en la variable $fp de manera exclusiva 
//la funcion flock($fp, LOCK_EX); esta funcion nos ayuda a bloquear el archivo 

$saldo = fread($fp, filesize($archivo)); //lee el contenido completo de un archivo y lo almacena en la variable $saldo
//filesize($archivo) esta funcion es para debolver el tamaño del archivo en bytes. Para saber exactamente cuánta información hay que leer.
//fread  lee datos binarios de un archivo y almacenarlos en un búfer de memoria

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND);//registra en el archivo log que se realizó una lectura del saldo.
//date("H:i:s") es una funcion que guarda la fecha y hora del servidor en horas - minutos - segundos
//file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND); es para agregar al final del log los datos sin borra lo que ya hay en el log

sleep(2); //Espera 2 segundos antes de continuar
//sleep(2); Detiene la ejecucion del programa durante 2 segundos 

$nuevo = $saldo - 300; //en la variable $nuevo se guarda el resultado de restarle 300 a lo que hay en la variable de $saldo

// Volver al inicio del archivo
ftruncate($fp, 0);//Borra todo el contenido del archivo antes de escribir el nuevo saldo
//ftruncate($fp, 0); esta funcion basicamente vacia el archivo porque se le esta pasando un valor de 0. (Corta el archivo a un tamaño especifico)
rewind($fp); //resetea el puntero del archivo al inicio
//rewind($fp); regresa el puntero al inicio del documento 
fwrite($fp, $nuevo); //Actualiza el archivo con el nuevo saldo
//fwrite($fp, $nuevo); escribe el nuevo saldo en el archivo 

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) escribe saldo: $nuevo\n", FILE_APPEND); //registra en el archivo log que la Tarea 1 escribió un nuevo saldo, guardando la hora y el valor actualizado
//file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND); es para agregar al final del log los datos sin borra lo que ya hay en el log

// liberar
flock($fp, LOCK_UN);//Libera el bloqueo del archivo 
//flock($fp, LOCK_UN); esta funcion desbloquea el archivo que se habia bloqueado al inicio del archivo ($fp)
fclose($fp); //cierra correctamente el archivo $fp y libera el recurso de memoria que estaba ocupando 

header("Location: index.php"); //Redirige al navegador al index.php enviando un encabexado 