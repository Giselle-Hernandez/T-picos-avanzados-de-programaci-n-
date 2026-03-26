<?php //inicia php
$saldo = file_exists("recurso.txt") ? file_get_contents("recurso.txt") : 1000; //en esta linea se obtiene el saldo del archivo de recursos, y si este no existe se toma un saldo de 1000
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Control de Recursos</title> <!-- este es el titulo de la pestaña-->
</head>
<body>

<h2>CONTROL DE RECURSO COMPARTIDO</h2> <!--titulo de la pagina-->

<p><strong>Saldo actual:</strong> $<?php echo $saldo; ?></p><!--este es un parrafo que dice "saldo actual:" y va a mostrar lo que hay en la variable $saldo-->

<h3>🔴 SIN CONTROL (puede fallar)</h3> <!--este es un titulo-->
<a href="tarea1.php">Tarea 1 - Retirar 300</a><br><!--esta es una referencia al archivo de "tares1.php" y muestra dos acciones disponibles-->
<a href="tarea2.php">Tarea 2 - Retirar 500</a><!--esta es una referencia al archivo de "tares2.php" y muestra dos acciones disponibles-->

<h3>🟢 CON CONTROL (bloqueo)</h3> <!--este es un titulo-->
<a href="tarea1_lock.php">Tarea 1 - Retirar 300</a><br><!--esta es una referencia al archivo de "tares1_lock.php" y muestra dos acciones disponibles-->
<a href="tarea2_lock.php">Tarea 2 - Retirar 500</a><!--esta es una referencia al archivo de "tares2_lock.php" y muestra dos acciones disponibles-->

<h3>📜 Log del sistema</h3> <!--este es un titulo-->
<pre> <!--texto preformateado-->
<?php //inicia php
if(file_exists("log.txt")){ //si el archivo "log.txt" existe 
    echo file_get_contents("log.txt"); //muestra lo que hay en el archivo de "log.txt"
}
?>
</pre> <!--cierra el texto preformado-->

</body><!--cierra el cuerpo-->
</html><!--cierra el html-->