<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "dbusuarios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario de registro
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contraseña"];
$repetir_contrasena = $_POST["repetir_contrasena"];

// Verificar si las contraseñas coinciden
if ($contrasena !== $repetir_contrasena) {
    echo "Las contraseñas no coinciden.";
    sleep(3);
    echo "<script>window.location = 'registro.html';</script>";
} else {
    // Hash de la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar datos en la tabla de registro
    $sql = "INSERT INTO registro (nombre, correo, contraseña) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $nombre, $correo, $contrasena_hash);
        if ($stmt->execute()) {
            echo "Registro exitoso.";
            echo "<script>window.location = 'login.html';</script>";
        } else {
            echo "Error en el registro: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }
}

$conexion->close();

?>
