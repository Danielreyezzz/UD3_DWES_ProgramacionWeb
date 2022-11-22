<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
    $session = $_SESSION['usuario'];
}
if (!isset($_SESSION['usuario'])) {
    die("Fallo de sesión.");
    include "010index.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <script defer src="../js/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>

<body>                     
<ul class="list-group">
  <li class="list-group-item"><?php echo $_SESSION['peliculas'][0] ?></li>
  <li class="list-group-item"><?php echo $_SESSION['peliculas'][1]?></li>
  <li class="list-group-item"><?php echo $_SESSION['peliculas'][2] ?></li>

</ul>

</body>

</html>