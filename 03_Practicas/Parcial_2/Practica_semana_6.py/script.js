
function ejecutarParalelo(){
    document.getElementById("resultado").innerHTML = "Ejecutando...";
    fetch("tarea1.php");
    fetch("tarea2.php");
    document.getElementById("resultado").innerHTML = "Tareas enviadas en paralelo (revisar pestaña Network)";
}
