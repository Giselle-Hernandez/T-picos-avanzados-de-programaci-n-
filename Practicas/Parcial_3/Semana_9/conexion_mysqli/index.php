<!DOCTYPE html> <!--inicia html-->
<html lang="es"> <!-- -->
<head> <!--este es el encabezado de la pagina -->
    <meta charset="UTF-8"> <!--esta linea es para que se acepten caracteres especiales como la ñ -->
    <title>Semana 9 - base de datos</title> <!--este es el titulo de la pestaña -->
</head><!--cierre del encabezado -->
<body><!--abre el cuerpo del formulario -->
    <h2>1. Crear base de datos</h2><!--este es una etiqueta para un titulo -->
    <form action="crear_bd.php" method="post"> <!--Crea un formulario que al enviarse mande la información al archivo crear_bd.php por el método POST -->
        <button type="submit">Crear Base de datos</button><!--crea un boton de tipo submit (envia informacion) con el texto que dice crear base de datos -->
    </form> <!--cierra la etiqueta de formulario -->

    <h2>2. Crear tabla</h2> <!--este es una etiqueta para un titulo -->
    <form action="crear_tabla.php" method="post"> <!--Crea un formulario que al enviarse mande la información al archivo crear_tabla.php por el método POST -->
        <button type="submit">Crear tabla alumnos</button> <!--crea un boton de tipo submit (envia informacion) con el texto que dice crear tabla alumnos -->
    </form> <!--cierra la etiqueta de formulario -->

    <h2>3. Insertar alumno</h2><!--este es una etiqueta para un titulo -->
    <form action="insertar.php" method="post"><!--Crea un formulario que al enviarse mande la información al archivo insertar.php por el método POST -->
        <input type="text" name="nombre" placeholder="Nombre"> <!--esta es espacio de entrada de texto de nombr "nombre" que pone con placeholder un texto de ejeplo sobre el campo -->
        <input type="text" name="carrera" placeholder="Carrera"> <!--esta es espacio de entrada de texto de nombr "carrera" que pone con placeholder un texto de ejeplo sobre el campo -->
        <button type="submit">Insertar</button><!--crea un boton de tipo submit (envia informacion) con el texto que dice  insertar -->
    </form><!--cierra la etiqueta de formulario -->

    <h2>4. Ver alumnos</h2><!--este es una etiqueta para un titulo -->
    <form action="mostrar.php" method="post"><!--Crea un formulario que al enviarse mande la información al archivo mostrar.php por el método POST -->
        <button type="submit">Mostrar registros</button><!--crea un boton de tipo submit (envia informacion) con el texto que dice mostrar registrod -->
    </form> <!--cierra la etiqueta de formulario -->
</body><!--cierra el cuerpo del archivo -->
</html><!-- cierra html-->