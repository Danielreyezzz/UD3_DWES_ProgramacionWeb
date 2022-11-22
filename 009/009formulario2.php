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
    <?php
      //Aquí iniciamos sesion y le pasamos a esta los valores recogidos en el fomulario anterior
      session_start();
    
      if (isset($_POST['nombreCompleto'])) {
          $nombreCompleto = $_POST['nombreCompleto'];
          $_SESSION["nombreCompleto"] = $nombreCompleto;
      } 
      if (isset($_POST['url'])) {
          $url = $_POST['url'];
          $_SESSION["url"] = $url;
      } 
      if (isset($_POST['email'])) {
          $email = $_POST['email'];
          $_SESSION["email"] = $email;
      } 
      if (isset($_POST['sexo'])) {
          $sexo = $_POST['sexo'];
          $_SESSION["sexo"] = $sexo;
      } 
  
    ?>

    <!-- Segunda parte del formulario, se la pasamos a la tercera pagina -->
    <div class="container">
      <form action="009formulario3.php" method="POST">
        
        <div class="mb-3 mt-4">
          <label for="number" class="form-label">Número de convivientes</label>
          <input
            type="number"
            name="number"
            id="number"
            class="form-control"
            placeholder="0"
            aria-describedby="helpId"
            min="0"
          />
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            name="aficiones[]"
            type="checkbox"
            value="musica"
            id="musica"
          />
          <label class="form-check-label" for="aficiones"> Música </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            name="aficiones[]"
            type="checkbox"
            value="football"
            id="football"
          />
          <label class="form-check-label" for="aficiones"> Football </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            name="aficiones[]"
            type="checkbox"
            value="anime"
            id="anime"
          />
          <label class="form-check-label" for="aficiones"> Anime </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            name="aficiones[]"
            type="checkbox"
            value="comida"
            id="anime"
          />
          <label class="form-check-label" for="aficiones"> Comida </label>
        </div>

        <div class="mb-3 mt-4">
          <label for="multi" class="form-label">Menú favorito</label>
          <select
            multiple
            class="form-select form-select-lg"
            name="multi[]"
            id="multi"
          >
            <option value="macarrones">Macarrones con queso</option>
            <option value="albondigas">Albondigas con tomate</option>
            <option value="puchero">Puchero de la mama</option>
            <option value="garbanzos">Potaje de garbanzos</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </body>
</html>
