<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "dbusuarios");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario de inicio de sesión
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Buscar el usuario en la tabla de usuarios
$sql = "SELECT id, contraseña FROM registro WHERE correo = '$correo'";

// Ejecutar la consulta SQL y manejar errores
$resultado = $conexion->query($sql);

if ($resultado === false) {
    die("Error en la consulta SQL: " . $conexion->error);
}

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $contrasena_hash = $fila["contraseña"];
    
    // Verificar la contraseña
    if (password_verify($contrasena, $contrasena_hash)) {
        echo "Inicio de sesión exitoso.";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conexion->close();
?>
