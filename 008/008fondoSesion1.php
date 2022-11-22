<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <script defer src="../bootstrap/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>
<?php
//Practicamente igual que las cookies pero con session
//Es importante que session_start() esté antes de todo
   session_start();
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    $_SESSION["session"] = $color;
} else {
    $color = $_SESSION["session"] ?? "light";
};
?>

<body <?php echo "class =bg-$color" ?>>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <select class="form-select form-select-lg" name="color" id="color">
                <option value="dark">Oscuro</option>
                <option value="success">Verde</option>
                <option value="info">Azul</option>
                <option value="body">Blanco</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <a href="008fondoSesion2.php">Enlace a la 2º Página</a>
</body>

</html>