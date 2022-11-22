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
    if(isset($_FILES['archivo'])){
        $ruta = "archivos005/";
        //creo un array de errores para acumular estos y mostrarlos cuando sea necesario
        $errores = array();
        //array de extensiones permitidas
        $extensiones = array("jpeg", "jpg", "png");
        //aquí comprobamos la extensión
        $file_ext = strtolower(pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION));
        
        //comparamos si la extensión del archivo no coincide con nuestras extensiones permitidas
        if (in_array($file_ext, $extensiones) === false) {
            $errores[] = "Estensión no permitida. Prueba con imágenes jpeg, jpng o png.";
        }
    
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["name"] && !empty($_POST["altura"]) && !empty($_POST["anchura"])) {
            if (file_exists($ruta) || @mkdir($ruta)) {
                $origen = $_FILES["archivo"]["tmp_name"];
                $destino = $ruta . $_FILES["archivo"]["name"];
                if (empty($errores) == true) {
                    if (@move_uploaded_file($origen, $destino)) {
                        //Cuando movamos nuestro archivo a su carpeta correspondiente, mostrará la imagen con un sacrilegio de etiqueta llamada style
                        //Esta modificara el width y el height de nuestra imagen
                        echo "El arhivo se movió exitosamente </br>";
                        echo '<div>
                        <img style="width:'. $_POST["altura"].'px!important; height:'. $_POST["anchura"].'px!important;" src="'.$destino.'" alt="img">
                    </div>';
                    } else {
                        echo "No se ha creado la carpeta correctamente";
                    }
                } else {
                    print_r($errores);
                }
            }
        } else {
            echo "No se ha cargado ningun archivo o altura y anchura no se han rellenado";
        }
    }
        ?>
    
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="formulario">
            <input type="file" name="archivo" id="archivo">
            <label for="altura">Altura (en px): </label>
            <input type="number" name="altura" id="altura">
            <label for="altura">Anchura (en px): </label>
            <input type="number" name="anchura" id="anchura">
            <input type="submit" value="Enviar">
        </form>

  
</body>

</html>