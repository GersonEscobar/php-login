<?php
include 'db.php';

$usuario = $_POST['usuario'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

// Preparar y enlazar la consulta
$stmt = $conexion->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $contraseña);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Usuario registrado con éxito";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
