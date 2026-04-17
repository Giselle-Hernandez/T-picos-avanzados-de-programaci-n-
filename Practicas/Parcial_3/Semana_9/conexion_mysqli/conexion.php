<?php #Inicia el codigo php. Se le tiene que indicar el tipo de codigo al servidor para que sepa que son indicaciones 
require_once "config.php"; #Incluye el archivo de config.php una unica vez. Gracias a esta linea se logra que el archivo se cargue de manera obligatoria y que no se incluyan las variables mas de una vez lo que nos reduce la probabilidad de fallos y errores.
$conexion = new mysqli($host, $user, $pass); # Crea una conexion al servidor de la base de datos. 

if ($conexion->connect_error){ #Esta linea se utiliza para verificar si ocurrio algun error, por ejemplo que los datos que se obtienen de config sean incorrectos y connect_error guarda el mensaje de error que se produce.
    die("Error de conexion: " . $conexion->connect_error); #Esta linea se utiliza para detener el programa y mostrar un mensaje si hubo algun error, ademas de que gracias a esto el resto del codigo ya no se ejecuta. 
}

echo "Conexion al servidor exitosa. "; #si la conexion se realizo de forma exitosa se muestra el mensaje de este echo para decirle al usuario que el proceso es correcto
#mysql es el gestor de base de datos
#que representa cada variable 
#$host: es la direccion del servidor
#$user: representa el nombre de usuario con el que se intenta acceder
#$pass: es la contraseña del usuario
#Todos estos datos se toman y se leen del archivo de config.php cuando se carga utilizando el require_once
?>