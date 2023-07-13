<?php
// Conexión a la base de datos
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "registrophp"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];

// Insertar los datos en la tabla
$sql = "INSERT INTO registros (nombre, apellido, edad, correo) VALUES ('$nombre', '$apellido', '$edad', '$correo')";


if ($conn->query($sql) === TRUE) {
    header("Location: ../HTML/confirmacion.html");
    exit();
} else {
    header("Location: ../HTML/error.html");
    exit();
}



$conn->close();
?>
