<?php
include 'db.php';
session_start();

$usuario = $_POST['username'];
$contraseña = $_POST['contra'];
$_SESSION['usuario'] = $usuario;

// Preparar la consulta
$stmt = $conexion->prepare("SELECT * FROM users WHERE username = ? AND contra = ?");
$stmt->bind_param("ss", $usuario, $contraseña);

// Ejecutar la consulta
$stmt->execute();

// Obtener el resultado
$resultado = $stmt->get_result();
$filas = $resultado->num_rows;

if ($filas > 0) {
    header("location: home.php");
    exit;
} else {
    include("index.php");
    echo '<script>alert("error en autenticacion");</script>';
}

// Liberar el resultado y cerrar la conexión
$stmt->free_result();
$stmt->close();
$conexion->close();
?>

