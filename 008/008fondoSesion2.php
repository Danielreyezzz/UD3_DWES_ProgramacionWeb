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
session_start();
//recupero la variable de mi sesión que necesito
$color = $_SESSION["session"]; 

//Destruyo la session y vuelvo atrás
if (isset($_POST["sessionDestroy"])) {
    session_destroy();
    header('Location: 008fondoSesion1.php');
}
?>
<body <?php echo "class =bg-$color" ?>>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="submit" name="sessionDestroy" value="Cerrar sesión y volver atrás">
</form>
</body>

</html>
