<?php
session_start();
$showRegisterButton = false;
$idJefe = '';
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $showRegisterButton = true;
    
} else {
    header("Location: index.php");
}
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $repetirContrasena = $_POST["repetirContrasena"];
    $puesto = $_POST["puesto"];
    $idJefe = $_SESSION["id"]; // obtener el id del cliente administrador desde la sesión
    
    // Verificar que las contraseñas coincidan
    if ($contrasena != $repetirContrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }
    
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startup";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }
    
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO empleado (nombre, apellido, correo, contra, puesto, clienteAdmin_id) VALUES ('$nombre', '$apellido', '$email', '$contrasena', '$puesto', '$idJefe')";
    if ($conn->query($sql) === TRUE) {
        echo "Empleado registrado exitosamente.";
        header("Location: index.php");
    } else {
        echo "Error al registrar al empleado: " . $conn->error;
    }
    
    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>