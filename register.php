<?php
if (isset($_GET["plan"])) {
  $plan = $_GET["plan"];
} else {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Golden Skills</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styleLogin.css" />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mt-5">
            <div class="card-body">
              <h2 class="text-center mb-4">Registro</h2>
              <form action="registro.php" method="POST">
                <input type="hidden" name="plan" value="<?= $plan ?>">
                <div class="form-group">
                  <label for="email">Correo Electrónico</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Ingrese su correo electrónico"
                  />
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input
                    type="text"
                    class="form-control"
                    id="usuario"
                    name="usuario"
                    placeholder="Ingrese un nombre de usuario"
                  />
                </div>
                <div class="form-group">
                  <label for="contraseña">Contraseña</label>
                  <input
                    type="password"
                    class="form-control"
                    id="contrasena"
                    name="contrasena"
                    placeholder="Ingrese una contraseña"
                  />
                </div>
                <div class="form-group">
                  <label for="repetirContraseña">Repetir Contraseña</label>
                  <input
                    type="password"
                    class="form-control"
                    id="repetirContrasena"
                    name="repetirContrasena"
                    placeholder="Repita la contraseña"
                  />
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">
                  Registrarse
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"
></script>

  </body>
</html>