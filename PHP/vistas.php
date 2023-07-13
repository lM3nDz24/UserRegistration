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


$sql = "SELECT * FROM registros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los registros
    while ($row = $result->fetch_assoc()) {
        echo "El ID es: " . $row["id"] . "<br>";
        echo "El Nombres es: " . $row["nombre"] . "<br>";
        echo "El Apellidos es: " . $row["apellido"] . "<br>";
        echo "El Edad es: " . $row["edad"] . "<br>";
        echo "El correo es: " . $row["correo"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>

