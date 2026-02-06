<?php // abre php
// =======================================================
// PARTE 3: RECEPCIÓN DE DATOS
// Aquí aprendemos cómo llegan los datos al servidor
// =======================================================

// Preguntamos si llegaron datos por POST
if ($_POST) { //se genera un arreglo pregunta si se genero y eso sucede cuando alguien le da clic contiene todo lo que se mando dede el foemulario

    // $_POST es un arreglo
    // Contiene todo lo que se envió desde el formulario

    echo "Llegaron datos al servidor<br>"; //mezcla de htmll y php

    // Mostramos TODO lo recibido
    echo "<pre>";
    print_r($_POST); //aplicar print r e investigar que hace 
    echo "</pre>";

} else {
    echo "No se ha enviado nada todavía";
}
?>

<!-- =========================================
Formulario para probar el envío
========================================= -->
<form method="post">
    <input type="text" name="dato">
    <button>Enviar</button>
</form>