<?php
$conexion = new mysqli("localhost", "root", "1234", "login_db");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
?>
