En esta practica se comenzo a utilizar bases de datos, por lo que el grado de dificultad aumento.
A continuacion se redactan las especificaciones del trabajo.

Nombre de la librería creada:
EmpleadoHelper.php

Métodos que contiene:
- validarCorreo($correo)
- formatearNombre($nombre)
- validarEdad($edad)
- calcularAntiguedad($fecha)

Cómo se importa:
require_once "libreria/EmpleadoHelper.php";

Cómo se invoca:
EmpleadoHelper::validarCorreo($correo);

Ventajas de usar componentes reutilizables:
- Código más ordenado
- Reutilización en otros proyectos
- Mejor mantenimiento
- Separación de responsabilidades

Diferencia entre librería estándar y librería definida por el usuario:
La librería estándar es propia del lenguaje (ej: DateTime, PDO).
La librería definida por el usuario es creada por el programador para resolver necesidades específicas.