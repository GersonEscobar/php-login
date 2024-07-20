<?php
$conexion = new mysqli("localhost", "root", "1234", "login_db");
try{
    $message = "Conexión exitosa";
    echo "<script>console.log('{$message}');</script>";
} catch (PDOException $e) {
    // Manejar errores de conexión
    $message = "Conexión fallida";
    echo "<script>console.log('{$message}');</script>";
}

?>
