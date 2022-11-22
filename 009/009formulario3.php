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
  //Repetimos el mismo procedimiento con los nuevos valores
  session_start();
  if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $_SESSION["number"] = $number;
  }

  if (isset($_POST['aficiones'])) {
    $aficiones = $_POST['aficiones'];
    $_SESSION["aficiones"] = $aficiones;
  }
  if (isset($_POST['multi'])) {
    $multi = $_POST['multi'];
    $_SESSION["multi"] = $multi;
  }
  ?>

  <!-- Finalmente mostramos los valores en una lista -->
<ul class="list-group">
  <li class="list-group-item"><?php echo $_SESSION['nombreCompleto'] ?></li>
  <li class="list-group-item"><?php echo $_SESSION['url'] ?></li>
  <li class="list-group-item"><?php echo $_SESSION['email'] ?></li>
  <li class="list-group-item"><?php echo $_SESSION['sexo'] ?></li>
  <li class="list-group-item"><?php echo $_SESSION['number'] ?></li>
  <li class="list-group-item"><?php echo implode(", ", $_SESSION['aficiones']) ?></li>
  <li class="list-group-item"><?php echo implode(", ", $_SESSION['multi']) ?></li>
</ul>

</body>

</html>