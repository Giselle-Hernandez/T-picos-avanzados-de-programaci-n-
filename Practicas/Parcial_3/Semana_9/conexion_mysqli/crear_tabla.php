<?php #abre codigo php
require_once "config.php"; #Incluye el archivo de config.php una unica vez. Gracias a esta linea se logra que el archivo se cargue de manera obligatoria.
$conexion = new mysqli ($host, $user, $pass, $db); # Crea una conexion al servidor de la base de datos. 
if ($conexion->connect_error){ #si hubo algun error al hacer la conexion sl mensaje de rror se guarda en connect_error
    die("Error: " . $conexion->connect_error); #si hay error se detiene el programa y semuestra un mensaje de error 
}

$sql = "CREATE TABLE IF NOT EXISTS alumnos ( #crea una variable de nombre $sql que almacena una instruccion que dice que cree una tabla si no existe con el nombre alumnos
id INT AUTO_INCREMENT PRIMARY KEY, #columna 1 id de tipo entero y es llave primaria
nombre VARCHAR(100), #columna 2 nombe de tipo texto y pueden ser hasta 100 caracteres
carrera VARCHAR(100) #columna 3 carrera de tipo texto y pueden ser hasta 100 caracteres
)"; #cierra las instrucciones de la tabla

if ($conexion->query($sql) === TRUE){ #Si la consulta SQL se ejecutó correctamente en la base de datos ejecuta el siguiente codigo
    echo "Tabla creada o ya existente"; #muestra un mensaje que se encuentra entre comillas
}else {  #si la condicion anterior no se cumple se ejecuta el siguiente codigo
    echo "Error: " . $conexion->error; #muestra un mensaje que dice "Error: " y el mensaje del problema que genera mysql, por ejemplo: Error: Table "alumnos" doesn't exist
}
?>