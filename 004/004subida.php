<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Formulario sencillo -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="formulario">
    <input type="file" name="archivo" id="archivo">
    <label for="altura">Altura (en px): </label>
    <input type="number" name="altura" id="altura">
    <label for="altura">Anchura (en px): </label>
    <input type="number" name="anchura" id="anchura">
    <input type="submit" value="Enviar">
    </form>

    <?php
    //Establecemos una ruta donde vamos a mover nuestro archivo
    $ruta = "archivos004/";
    //Comprobamos que se carga el archivo y los campos altura y anchura no son nulos
    if (isset($_FILES["archivo"]) && $_FILES["archivo"]["name"] && !empty($_POST["altura"]) && !empty($_POST["anchura"])) {
        //Si la ruta donde vamos a mover el archivo no existe, la creamos
        if (file_exists($ruta)|| @mkdir($ruta)) {
            //Establecemos es origen del archivo y su destino
            $origen = $_FILES["archivo"]["tmp_name"];
            $destino = $ruta.$_FILES["archivo"]["name"];
            //Movemos y avisamos de su existo o su fracaso
            if (@move_uploaded_file($origen, $destino)) {
                echo "El arhivo se movió exitosamente";
            }else{
                echo "Algo ha fallado";
            }

        }else{
            echo "No se ha creado la carpeta correctamente";
        }
    }else{
        echo "No se ha cargado ningun archivo o altura y anchura no se han rellenado";
    }
    ?>
</body>

</html>