<?php
if (isset($_GET['login'])) {
    $usuario = $_GET['usuario'];
    $contraseña = $_GET['contraseña'];
    if (empty($username) || empty($password)) {
        echo "Debes introducir un usuario y contraseña";
        include "010index.php";
    } else {
        if ($username == "admin" && $password == "1234") {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['peliculas'] = ["HP y el la Cámara Secreta", "Las Cronicas de Narnia", "La vida de Bryan"];
            $_SESSION['series'] = ["Juego de Tronos", "Breaking Bad", "Better Call Saul"];
            include "010peliculas.php";
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $errores = "Credenciales invalidas";
            include "010index.php";
        }
    }
}
