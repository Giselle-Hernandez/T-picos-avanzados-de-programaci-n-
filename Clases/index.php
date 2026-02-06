<!DOCTYPE html> <!--Tipo de documeto que es html -->
<html lang="es">  <!-- es es del idioma, ES es en español -->
<head>  <!--Etiqueta de encabezado -->
    <meta charset="UTF-8">  <!--es para que incluya simbbolos como ñ, comillas, etc. charset es para eso -->
    <title>Formulario de ejemplo</title> <!--Es el titulo de la pestaña en el navegador -->
</head>
<body> <!--inicio del cuerpo del documento. es lo que ve el usuario final -->

<!-- =========================================
PARTE 2: FORMULARIOS HTML
Aquí NO procesamos datos
Solo construimos la interfaz
========================================= -->

<h1>Formulario de ejemplo</h1> <!-- Los h son encabezados o como titulos--> 

<form>  <!--esta etiqueta es para crear el formulario. Action es adonde quieres que te mande al presionar un boton -->
    <!-- Campo de texto -->
    <label>Escribe algo:</label> <!--es la etiqueta para mostrar algo o de un campo de texto -->
    <input type="text"><!-- Tipo de dato que va a resivir el campo de texto, entrada de datos-->

    <br><br> <!--break brinca los renglones, salto de linea-->

    <!-- Campo numérico -->
    <label>Número:</label> <!---->
    <input type="number">

    <br><br>

    <!-- Botones -->
    <button>Botón A</button> <!--botones de tipo submit -->
    <button>Botón B</button>
</form>

</body>
</html>
<!--html es un lenguaje de etiquetas-->
<!--los botones son los eventos-->
<!-- hay que validar si se resivio y si es asi mostrar los datos -->