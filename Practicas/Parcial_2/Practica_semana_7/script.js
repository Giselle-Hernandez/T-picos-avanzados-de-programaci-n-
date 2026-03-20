function iniciar_tarea1() {
    document.getElementById("estado1").innerText = "Estado: en ejecución";

    fetch("tarea1.php", { //hace una peticion al archivo tarea1
        method: "POST" //mediante el metodo post
    })
    .then(() => location.reload()); //cuando termina la peticion recarga la pagina para actualizar la tabla 
}

function iniciar_tarea2() {
    document.getElementById("estado2").innerText = "Estado: en ejecución";

    fetch("tarea2.php", {
        method: "POST"
    })
    .then(() => location.reload());
}

function detener_tarea1() {
    document.getElementById("estado1").innerText = "Estado: detenida";//cambia el texto en el parrafo estado1 por uno que diga estado detenida

    fetch("detener.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" }, //indica envio de formulario tradicional
        body: "tarea=1" //envia el numero de tarea que se quiere detener 
    })
    .then(() => location.reload()); //refresca la pagina 
}

function detener_tarea2() {
    document.getElementById("estado2").innerText = "Estado: detenida"; //cambia el texto en el parrafo estado2 por uno que diga estado detenida


    fetch("detener.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },//indica envio de formulario tradicional
        body: "tarea=2"//envia el numero de tarea que se quiere detener 
    })
    .then(() => location.reload()); //refresca la pagina
}