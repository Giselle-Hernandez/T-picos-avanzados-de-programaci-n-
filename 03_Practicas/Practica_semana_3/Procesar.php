<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
    <H2>Estos son los datos recibidos por el formulario</H2>

<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    //mostrar el semestre 
    if (isset($_POST["semestre"])){
        $semestre = $_POST["semestre"];
        echo "<p><strong>Semestre: </strong>$semestre</p>";
    }else {
        echo "<p><strong>No se recibio ningun semestre</strong><p>";
    }

    //mostrar la carrera
    if (!empty($_POST["carrera"])){
        $carrera = $_POST["carrera"];
        echo "<p><strong>Carrera: </strong>$carrera</p>";
    }else{
        echo "<p><strong>No se selecciono carrera</strong></p>";
    }

     //mostrar las areas que visita
    if (isset($_POST["area"])){
        $areas = $_POST["area"];
        echo "<p><strong>Areas que frecuenta: </strong></p>";
        echo "<ul>";

        foreach ($_POST["area"] as $areas){
            echo "<li>$areas</li>";
        }
        echo "</ul>";
    }else{
        echo "<p>No se selecciono ningun área:( </p>";
    }

}
?>
    </div>
</body>
</html>