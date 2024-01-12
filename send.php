<?php

include("conexion.php");

$mensaje = "";

//Verifica si se ha enviado el formulario con un campo llamado 'send'.
if(isset($_POST['send'])) {

    //Comprueba si los campos del formulario (name, phone, email, message) tienen al menos un carácter. Utiliza strlen() para verificar que la longitud de cada campo sea mayor o igual a 1.
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    
    ) {
        //Los datos del formulario se recuperan usando $_POST y se almacenan en variables ($name, $phone, $email, $message). Luego, trim() se utiliza para eliminar espacios en blanco al principio y al final de cada dato.
        
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos (nombre, telefono, email, mensaje) 
        VALUES ('$name', '$phone', '$email', '$message') ";
        $resultado = mysqli_query($conex, $consulta);
    }

if (!$conex) {

    // Si hubo un error al conectarse con la base de datos, define el mensaje de error
    $mensaje = "Error de conexión: " . mysqli_connect_error();
    }


if ($resultado) {
        
        // Si hubo un error al insertar los datos, define el mensaje de error
        $mensaje = "Error al insertar datos: " . mysqli_error($conex);
    }
}
?>