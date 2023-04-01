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

$sql2 = "SELECT nombre FROM empleado WHERE id=$plan";
$resultado = $conn->query($sql2);
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $nombre = $row['nombre'];
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de vulnerabilidad - Usuario: <?php echo $nombre; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-JvQRx7oXz37iogHKfwGZLlwpI7AkFJhvxYg7NO0caUE8rsO+CKXzJdajFfrVWAlPy8LymTnm0nvTtT/C7VW18A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styleEnc.css" />
</head>
<body>
    <div class="container">
        <h1 class="title">Áreas de vulnerabilidad - Usuario: <?php echo $nombre; ?></h1>    <div class="card">
            <div class="card-header">
                <h2>Falta de tenacidad</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 3 fue la tenacidad, lo que podría indicar que el individuo tiene dificultades para mantener el enfoque y la determinación en situaciones desafiantes o cuando se enfrenta a obstáculos.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Agresividad</h2>
            </div>
            <div class="card-body">
                <p>Aunque la respuesta que mejor lo describe del Grupo 2 fue "Alma de la fiesta", la segunda mejor respuesta fue "Agresivo". Si esta persona no aprende a controlar su agresividad, puede causar conflictos innecesarios en el entorno laboral y en sus relaciones interpersonales.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Falta de originalidad</h2>
            </div>
            <div class="card-body">
                <p>Aunque la respuesta que mejor lo describe del Grupo 1 fue "Persuasivo", la respuesta que menos lo describe fue "Original". Esto puede significar que la persona tiene dificultades para generar nuevas ideas o soluciones creativas a los problemas, lo que puede limitar su capacidad para innovar en su trabajo.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Bonachonería excesiva</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 4 fue "Bonachón". Si la persona se enfoca demasiado en ser amable y complaciente, puede tener dificultades para tomar decisiones difíciles o para ser firme en situaciones que lo requieren.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Falta de atrevimiento</h2>
            </div>
            <div class="card-body">
                <p>La respuesta que menos lo describe del Grupo 5 fue "Atrevido", lo que puede indicar que la persona es más cautelosa y menos propensa a tomar riesgos. Si bien esto puede ser una cualidad positiva en ciertas situaciones, también puede limitar la capacidad de la persona para tomar decisiones audaces y perseguir oportunidades emocionantes.</p>
            </div>
        </div>
    </div>
    </body>
</html>

