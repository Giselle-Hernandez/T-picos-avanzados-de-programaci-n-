<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del formulario</title>
</head>
<body>
    <H2>Estos son los datos recibidos por el formulario</H2>

<?php 
if ($_SERVER["REQUEST_METHOD"]= "POST"){
    
    if (isset($_POST["semestre"])){
        $semestre = $_POST["semestre"];
        echo "<p><strong>Semestre:</strong>$semestre</p>";
    }else {
        echo "<p><strong>No se recibio ningun semestre</strong><p>";
    }

    if (isset($_POST["intereses"])){
        echo "<p><strong>Intereses:</strong>$intereses</p>";
        echo "ul";

        foreach ($_POST["intereses"] as $intereses){
            echo "<li>$intereses</li>";
        }

    }else{
        echo "<p>No se seleccionaron intereses:(</p>";
    }

    if (!empty($_POST["curso"])){
        $curso = $_POST["curso"];
        echo "<p><strong>Curso:</strong>$curso</p>";
    }else{
        echo "<p><strong>No se selecciono ningun curso</strong></p>";
    }

}
?>
</body>
</html>