<?php #abre codigo php
require_once "config.php"; #Incluye el archivo de config.php una unica vez. Gracias a esta linea se logra que el archivo se cargue de manera obligatoria.
$conexion = new mysqli($host, $user, $pass, $db); # Crea una conexion al servidor de la base de datos. 

if ($conexion->connect_error){ #si hubo algun error al hacer la conexion sl mensaje de rror se guarda en connect_error
    die("Error: " .$conexion->connect_error); #si hay error se detiene el programa y semuestra un mensaje de error 
}

if (isset($_POST["nombre"]) && isset($_POST["carrera"])){ #Si existen el nombre y la carrera y llegaron por el metodo post 
    $nombre = $_POST["nombre"]; #la variable de nombre es igual a lo que llego en nombre
    $carrera = $_POST["carrera"]; #la variable de carrera es igual a lo que llego en carrera

    $sql = "INSERT INTO alumnos (nombre, carrera) VALUES ('$nombre', '$carrera')" ; #en la variable de sql se guarda la instruccion de insertar en la tabla de alumnos los valores de las variables

    if ($conexion->query($sql) === TRUE){ #Si la consulta SQL se ejecutó correctamente en la base de datos ejecuta el siguiente codigo
        echo "Registro insertado"; #muestra un mensaje que se encuentra entre comillas
    }else{  #si la condicion anterior no se cumple se ejecuta el siguiente codigo
        echo "Error: " . $conexion->error; #muestra un mensaje que dice "Error: " y el mensaje del problema que genera mysql
    }
}else{ #si no llegaron los datos del formulario 
    echo "No se recibieron datos del formulario"; #muestra este mensaje al usuario 
}
?>
