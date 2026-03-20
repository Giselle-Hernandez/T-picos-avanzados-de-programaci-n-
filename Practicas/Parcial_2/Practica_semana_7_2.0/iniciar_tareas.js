function iniciar_tarea1(){ //Se crea una función de nombre hacerParalelo()
    fetch("Proceso1.php"); //Ejecuta el archivo tarea1.php en el servidor y tráeme el resultado.
    fetch("Proceso2.php"); //Ejecuta el archivo tarea2.php en el servidor y tráeme el resultado.
    document.getElementById("resultado").innerHTML = "Tareas enviadas en paralelo. Revisa la pestaña Network para ver la actividad."; //En la "cajita" con nombre "resultado" se muestra el mensaje "Tareas enviadas en paralelo. Revisa la pestaña Network para ver la actividad."
} //Cierre de la función
