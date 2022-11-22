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
//Si el color se enviado, seteo la cookie con 24h de caducidad
//Si no es así vamos a necesitar un color predeterminado para evitar errores
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 86400);
} else {
    $color = $_COOKIE['color'] ?? "light";
};
?>

<!-- Pintamos el body con la clase de boostrap bg- + el valor de alguna de nuestras opciones -->
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
</body>

</html>