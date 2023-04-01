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

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de vulnerabilidad - Usuario: [nombre]</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-JvQRx7oXz37iogHKfwGZLlwpI7AkFJhvxYg7NO0caUE8rsO+CKXzJdajFfrVWAlPy8LymTnm0nvTtT/C7VW18A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Áreas de vulnerabilidad - Usuario: [nombre]</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Falta de tenacidad</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 3 fue la tenacidad, lo que podría indicar que el individuo tiene dificultades para mantener el enfoque y la determinación en situaciones desafiantes o cuando se enfrenta a obstáculos.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Agresividad</h2>
            </div>
            <div class="card-body">
                <p>Aunque la respuesta que mejor lo describe del Grupo 2 fue "Alma de la fiesta", la segunda mejor respuesta fue "Agresivo". Si esta persona no aprende a controlar su agresividad, puede causar conflictos innecesarios en el entorno laboral y en sus relaciones interpersonales.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Falta de originalidad</h2>
            </div>
            <div class="card-body">
                <p>Aunque la respuesta que mejor lo describe del Grupo 1 fue "Persuasivo", la respuesta que menos lo describe fue "Original". Esto puede significar que la persona tiene dificultades para generar nuevas ideas o soluciones creativas a los problemas, lo que puede limitar su capacidad para innovar en su trabajo.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Bonachonería excesiva</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 4 fue "Bonachón". Si la persona se enfoca demasiado en ser amable y complaciente, puede tener dificultades para tomar decisiones difíciles o para ser firme en situaciones que lo requieren.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Falta de atrevimiento</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 5 fue "Atrevido", lo que puede indicar que la persona es más cautelosa y menos propensa a tomar riesgos. Si bien esto puede ser una cualidad positiva en ciertas situaciones, también puede limitar la capacidad de la persona para tomar decisiones audaces y perseguir oportunidades emocionantes.</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-owkNzIbV7KjREwNOgV7AxuOOZ9XVn8+GzyfJgkGNnZh+jbM7VjKw+ttL7VZNEpzoX9xB0+8KOFh2QVLE0gFQ2Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

