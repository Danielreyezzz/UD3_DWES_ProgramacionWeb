<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Si la cookie existe, la volvemos a setear pero su valor va a ser + 1. Mostramos su valor
    if (isset($_COOKIE['visitas'])) {
        setcookie('visitas', $_COOKIE['visitas'] + 1);
        $mensaje = 'Numero de visitas: ' . $_COOKIE['visitas'];
        //Una vez la cookie esté creada y el contador en marcha, pintamos un formulario para resetear la cookie
        echo '<form name="formulario" method="POST">
        <input class="button" type="submit" name="unsetCookies" value="Resetear Cookies" />
        </form>';
        //Setear con un tiempo negativo automaticamente borra la cookie
        if (isset($_POST["unsetCookies"])) {
            setcookie('visitas', "", -20000);
            header('Location: 006contadorVisitas.php');
        }
    } else {
        //Si la cookie no existe, que es lo que va a pasar al principio, la seteamos y le ponemos como valor 1
        //Indicamos que es la primera vez que se nos visita
        setcookie('visitas', 1);
        $mensaje = 'Bienvenido por primera vez a nuesta web';
    }

    echo $mensaje;
    //Nuestra cookie no va a tener fecha de caducidad, asique el contador aumentará cada vez que entremos 
    ?>

</body>

</html>