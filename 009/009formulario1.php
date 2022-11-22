<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <script src="../bootstrap/bootstrap.bundle.js"></script>
    <title>Document</title>
  </head>
  <body>
    <!-- Recogemos los primeros valores del formulario y los pasamos a la segunda parte -->
    <div class="container">
      <form action="009formulario2.php" method="POST">
        <div class="mb-3">
          <label for="nombreCompleto" class="form-label">Nombre Completo</label>
          <input
            type="text"
            name="nombreCompleto"
            id="apellidos"
            class="form-control"
            placeholder="Nombre Completo"
            aria-describedby="helpId"
          />
        </div>
        <div class="mb-3">
          <label for="url" class="form-label">URL</label>
          <input
            type="url"
            name="url"
            id="url"
            class="form-control"
            placeholder="Tu página web"
            aria-describedby="helpId"
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            placeholder="Tu email"
            aria-describedby="helpId"
          />
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="sexo"
            id="hombre"
            value="hombre"
          />
          <label class="form-check-label" for="hombre"> Hombre </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="sexo"
            id="mujer"
            value="mujer"
          />
          <label class="form-check-label" for="mujer"> Mujer </label>
        </div>
        <button name="enviar" type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </body>
</html>
