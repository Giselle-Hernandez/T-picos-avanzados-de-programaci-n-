function iniciar_tarea1() {
    document.getElementById("estado1").innerText = "Estado: en ejecución";

    fetch("tarea1.php")
        .then(() => location.reload());
}

function iniciar_tarea2() {
    document.getElementById("estado2").innerText = "Estado: en ejecución";

    fetch("tarea2.php")
        .then(() => location.reload());
}

function detener_tarea1() {
    document.getElementById("estado1").innerText = "Estado: detenida";

    fetch("detener.php?tarea=1")
        .then(() => location.reload());
}

function detener_tarea2() {
    document.getElementById("estado2").innerText = "Estado: detenida";

    fetch("detener.php?tarea=2")
        .then(() => location.reload());
}