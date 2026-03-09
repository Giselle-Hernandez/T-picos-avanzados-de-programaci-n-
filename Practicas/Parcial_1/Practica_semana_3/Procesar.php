<!DOCTYPE html> <!--tipo de docuemto-->
<html lang="es"><!--idioma del documento-->
<head> <!--abre el encabezado -->
    <meta charset="UTF-8"> <!--caracteres especiales-->
    <title>Datos del formulario</title> <!--titulo de la pestaña-->
    <link rel="stylesheet" href="css/estilos.css"> <!--enlace con el css-->
</head> 
<body>
    <div class="contenedor"> <!--crea un bloque "contenedor" y nos permite darle estilos -->
    <H2>Estos son los datos recibidos por el formulario</H2>

<?php //apertura de php
if ($_SERVER["REQUEST_METHOD"]=="POST"){ //si se accedio a la pagina mediante post entonces ejecuta "REQUEST_METHOD"= metodo utilizado por el navegador para acceder a una pagina
    
    //mostrar el semestre 
    if (isset($_POST["semestre"])){ //Si existe un valor enviado en el formulario en el campo semestre ejecuta
        $semestre = $_POST["semestre"]; //guarda en la variables $semestre el valor enviado en "semestre"
        echo "<p><strong>Semestre: </strong>$semestre</p>"; //muestra los datos del semestre
    }else {
        echo "<p><strong>No se recibio ningun semestre</strong><p>";
    }

    //mostrar la carrera. Es el select 
    if (!empty($_POST["carrera"])){ //si $_POST carrera no esta vacio !empty significa si no esta vacio
        $carrera = $_POST["carrera"];
        echo "<p><strong>Carrera: </strong>$carrera</p>";
    }else{
        echo "<p><strong>No se selecciono carrera</strong></p>";
    }

     //mostrar las areas que visita
    if (isset($_POST["area"])){
        $areas = $_POST["area"];
        echo "<p><strong>Areas que frecuenta: </strong></p>";
        echo "<ul>"; //lista desordenada

        foreach ($_POST["area"] as $areas){ //Para cada valor seleccionado en el formulario en area, crea un <li> en HTML con ese valor.
            echo "<li>$areas</li>";//li es elemento de lista
        }
        echo "</ul>";//lista desordenada
    }else{
        echo "<p>No se selecciono ningun área:( </p>";
    }
}
?>
    </div> <!--cierra la clase con los estilos-->
</body>
</html>