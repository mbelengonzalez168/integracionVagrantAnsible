<?php
// Conexión a la base de datos
$servername = "mysql";
$username = "root";
$password = "1234";
$database = "equipoDevops";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO datos_formulario (nombre, pais) VALUES ('$nombre', '$pais')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
