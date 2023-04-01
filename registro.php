<?php
    $servidor = "localhost";
    $usuarioBD = "root";
    $contrasenaBD = "";
    $nombreBD = "startup";

    // Conectar a la base de datos
    $conexion = mysqli_connect($servidor, $usuarioBD, $contrasenaBD, $nombreBD);

    if (!$conexion) {
        header("Location: index.php");
        exit;
    }

    $correo = (isset($_POST["email"]) && !empty($_POST["email"])) ? $_POST["email"] : null;
    $usuario = (isset($_POST["usuario"]) && !empty($_POST["usuario"])) ? $_POST["usuario"] : null;
    $contrasena = (isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) ? $_POST["contrasena"] : null;
    $repetirContrasena = (isset($_POST["repetirContrasena"]) && !empty($_POST["repetirContrasena"])) ? $_POST["repetirContrasena"] : null;
    $plan = (isset($_POST["plan"]) && !empty($_POST["plan"])) ? $_POST["plan"] : null;

    // Comprobar si todos los campos están definidos y no están vacíos
    if (!$correo || !$usuario || !$contrasena || !$repetirContrasena || !$plan) {
        echo "Correo:", $correo;
        echo "Usuario:", $usuario;
        echo "Contra:", $contrasena;
        echo "Rep:", $repetirContrasena;
        echo "Plan:", $plan;
    }

    // Validar que la contraseña y la confirmación sean iguales
    if ($contrasena != $repetirContrasena) {
        echo "Las contraseñas no coinciden. Inténtelo de nuevo.";
        exit;
    }

    $sql = "INSERT INTO clienteAdmin (correo, usuario, contra, contraR, plan)
                VALUES ('$correo', '$usuario', '$contrasena', '$repetirContrasena', '$plan')";

    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
        exit;
    }else{
        header("Location: index.php");
    }

    mysqli_close($conexion);
?>
