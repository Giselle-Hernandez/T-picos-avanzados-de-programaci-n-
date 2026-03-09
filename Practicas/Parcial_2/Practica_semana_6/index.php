<!DOCTYPE html> >  <!--Indica al navegador que es un documento de html-->
<html> <!--Inicia el documento html -->
    <head> <!--Cabeza del documento -->
        <title>Semana 6 - Concurrencia</title> <!--Titulo de la pestaña-->
        <script defer src="script.js"></script> <!--Carga el archivo script.js en segundo plano y lo ejecuta solo cuando todo el HTML esté listo-->
    </head> <!--Cierre del encabezado -->
    <body> <!--Abre el cuerpo del documento-->
        <h2>Comparacion de ejecucion secuencial y concurrente</h2> <!--Titulo principal. Muestra un encabezado nivel 2-->
        <h3>Modo secuencial</h3> <!--Subtitulo de la primera sección. Encabezado nivel 3-->
        <a href="secuencial.php" target="_blank"> <!--Es el enlace al archivo secuencial.php y lo abre en una nueva pestaña del navegador -->
            <button>Ejecucion secuencial</button> <!--Crea un botón que dice “Ejecucion secuencial” y al precionarlo abre secuencial.php-->
        </a> <!--Cierra el enlace -->
        <h3>Simulación de ejecución en paralelo</h3> <!--Subtitulo de la primera sección. Encabezado nivel 3-->
        <button onclick="hacerParalelo()">Ejecutar en paralelo</button> <!--Crea un botón que dice “Ejecutar en paralelo” y al hacer clic se ejecuta la función “hacerParalelo()”-->
        <div id="resultado"></div> <!--Es una “cajita” en la página con nombre resultadodonde JavaScript puede mostrar mensajes dinámicamente. -->
    </body> <!--Cierra el cuerpo del documento-->
</html> <!--Finaliza el documento html -->