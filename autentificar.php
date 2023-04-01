<?php

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

// Verificar si se envió un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Consultar la tabla clienteAdmin para encontrar un usuario con el correo y contraseña proporcionados
    $sql = "SELECT id, correo, usuario FROM clienteAdmin WHERE usuario='$usuario' AND contra='$contraseña'";
    $result = $conn->query($sql);
    $sql2 = "SELECT id, correo, nombre FROM empleado WHERE nombre='$usuario' AND contra='$contraseña'";
    $result2 = $conn->query($sql2);
    // Verificar si se encontró un usuario
    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir a la página de inicio
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["correo"] = $row["correo"];
        $_SESSION["nombreUsuario"] = $row["usuario"];
        $sesion_iniciada = true;
        $_SESSION["loggedin"] = true;
        header("Location: index.php");
    }elseif ($result2->num_rows > 0){
            // Iniciar sesión y redirigir a la página de inicio
            session_start();
            $row = $result2->fetch_assoc(); // <- Cambiar esta línea
            $_SESSION["id2"] = $row["id"];
            $_SESSION["correo2"] = $row["correo"];
            $_SESSION["nombreUsuario2"] = $row["nombre"];
            $sesion_iniciada = true;
            $_SESSION["loggedin2"] = true;
            header("Location: index.php");
        }else{
        // Mostrar un mensaje de error si no se encontró un usuario
        echo "El usuario y/o contraseña son incorrectos.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
