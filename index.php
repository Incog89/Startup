<!DOCTYPE html>
<html>
  <head>
    <title>Golden Skills</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo" style="max-width: 150px; max-height: 125px; object-fit: contain;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="bi bi-door-open-fill"></i> Iniciar sesión
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <i class="bi bi-box-arrow-in-right"></i> Registrar Empleadosmysql
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="tableContainer"></div>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
          <div class="card-header" style="background-color: #28a745;">
              Plan Gratuito
            </div>
            <div class="card-body">
            <h5 class="card-title">Inscripción Gratuita</h5>
              <span style="color: gold;">
                <i class="fa fa-star"></i>
              </span>
              <p class="card-text">Regístrate ahora y accede a nuestras funciones básicas de forma gratuita.</p>
              <ul>
                <li>Acceso a la plataforma.</li>
                <li>Uso de las herramientas de evaluación.</li>
                <li>Resultados generales con base a las áreas de oportunidad.</li>
              </ul>
              <br>
              <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header" style="background-color: #aaa9ad;">
              Plan Silver
            </div>
            <div class="card-body">
              <h5 class="card-title">Inscripción Semestral</h5>
              <span style="color: gold;">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </span>
              <p class="card-text">Regístrate ahora y accede a todas nuestras funciones premium por 6 meses.</p>
              <ul>
                <li>Beneficios del Plan Gratuito.</li>
                <li>Propuestas de plan de acción dirigido a la mejora.</li>
                <li>Seguimiento de actividades.</li>
                <li>Segunda evaluación.</li>
                <li>Entrega de resultados finales.</li>
              </ul>
              <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header" style="background-color: #f5ce00;">
              Plan Gold
            </div>
            <div class="card-body">
              <h5 class="card-title">Inscripción Anual</h5>
              <span style="color: gold;">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </span>
              <br>
              <br>
              <br>
              <p class="card-text">Si te decides por nuestro plan golden recibiras todos los beneficios del 
                Plan Silver durante todo un año, pero con un gran descuento del 15%, Animate por nuestro 
                gran servicio.
              </p>
              <br>
              <br>
              <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>