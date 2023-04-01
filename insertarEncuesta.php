<?php

// Obtener los valores del formulario
$plan = $_POST['plan'];
$respuestas = isset($_POST['respuesta']) ? $_POST['respuesta'] : null;

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar los valores en la tabla encuestas
$sql = "INSERT INTO encuestas (respuestaP, respuestaN, ID_emp) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($respuestas !== null) {
    foreach ($respuestas as $respuesta) {
        $stmt->bind_param("iii", $respuesta['respuestaP'], $respuesta['respuestaN'], $plan);
        $stmt->execute();
    }
}

// Cerrar la conexión
$stmt->close();
$conn->close();

?>