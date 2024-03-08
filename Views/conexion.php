<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "krakengym"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa"; // Mensaje de éxito si la conexión se establece correctamente

// Puedes realizar consultas a la base de datos desde aquí
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_queri($conn, "SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1);
{
    header ("Location: C:\xampp\htdocs\plataformas\Models\index.html")
}
else if ($nr == 0)
{
        echo "No ingreso";
}
// Cerrar conexión
$conn->close();
?>