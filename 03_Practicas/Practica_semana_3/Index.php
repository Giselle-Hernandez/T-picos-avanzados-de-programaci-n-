<!DOCTYPE html> <!--Tipo de documento -->
<html lang="es"> <!--idioma español -->
<head>
    <meta charset="UTF-8"> <!--caracteres especiales -->
    <title>Formulario</title> <!--titulo de la ventana -->
    <link rel="stylesheet" href="css/estilos.css"> <!--enlace con el css. href es hypertext reference -->
    <script src="js/validar.js"></script> <!-- enlace con el archivo js-->
</head>
<body>
    <h1>Formulario de registro</h1> <!--titulo de la pagina-->
    <form method="POST" action="Procesar.php" onsubmit=" return validar_form()"> <!--onsubmit es un evento-->
    <!--Radio botones-->    
    <p><strong>Selecciona tu semestre:</strong></p>
    <input type="radio" name="semestre" value="Segundo">Segundo <br>
    <input type="radio" name="semestre" value="Cuarto">Cuarto <br>
    <input type="radio" name="semestre" value="Sexto">Sexto <br>
    <input type="radio" name="semestre" value="Octavo">Octavo <br>
    
    <!--Select-->
    <p><strong>Selecciona tu carrera:</strong></p>
    <select name="carrera" id="carrera"> <br>
        <option value="">--Selecciona una opción--</option>
        <option value="Sistemas computacionales">Sistemas computacionales</option>
        <option value="Gestion empresarial">Gestion empresarial</option>
        <option value="Innovacion agricola sustentable">Innovacion agricola sustentable</option>
        <option value="Industrial">Industrial</option>
    </select>

    <!--Checkbox--> 
    <p><strong>Selecciona que areas del Tec visitas con frecuencia: </strong></p>
    <input type="checkbox" name="area[]" value="Cafeteria">Cafeteria<br>
    <input type="checkbox" name="area[]" value="Laboratorio de quimica">Laboratorio de quimica<br>
    <input type="checkbox" name="area[]" value="Biblioteca">Biblioteca <br>
    <input type="checkbox" name="area[]" value="Taller de robotica">Taller de robotica <br><br> 

    <!--Botón para enviar-->
    <button type="submit" name="action" value="enviar">Enviar</button>

    </form>

</body>
</html>