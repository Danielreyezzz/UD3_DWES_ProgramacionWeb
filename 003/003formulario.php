<?php
//Si nada está vacío, haremos las validaciones. Si hay algo vacío generaremos el formulario
if (!empty($_GET['nombre']) && !empty($_GET['apellidos']) && !empty($_GET['email']) && !empty($_GET['url']) && !empty($_GET['sexo']) && !empty($_GET['convivientes']) && !empty($_GET['aficiones']) && !empty($_GET['menu'])) {
    echo "NADA ESTÁ VACÍO </br>";
    //isset por cada campo para comprobar que el valor no sea nulo
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        echo "Nombre OK </br>";
    }
    if (isset($_GET['apellidos'])) {
        $apellidos = $_GET['apellidos'];
        echo "Apellidos OK </br>";
    }
    //filter para email que valida que este tenga el formato correcto
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email OK </br>";
            $email = $_GET['email'];
        } else {
            echo "Email MAL </br>";
        }
    }
    //filter para URL que valida que esta tenga el formato correcto
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $url = $_GET['url'];
        } else {
            echo "URL MAL </br>";
        }
    }
    if (isset($_GET['sexo'])) {
        $sexo = $_GET['sexo'];
        echo "Sexo OK </br>";
    }
    //filter para los enteros. Valida que el valor sea efectivamente un int
    if (isset($_GET['convivientes'])) {
        $convivientes = $_GET['convivientes'];
        if (filter_var($convivientes, FILTER_VALIDATE_INT)) {
            $convivientes = $_GET['convivientes'];
        } else {
            echo "Convivientes MAL </br>";
        }
    }
    //Creamos una lista de valores permitidos. Luego comprobamos que el valor sea un array.
    //Luego comprobamos que los valores del array se encuentran dentro de la lista de valores permitidos
    if (isset($_GET['aficiones'])) {
        $listaAficiones = ["musica", "football", "anime", "comida"];
        $aficiones = $_GET['aficiones'];
        if (is_array($aficiones)) {
            foreach ($aficiones as $key => $value) {
                if (!in_array($value, $listaAficiones)) {
                    echo  $value, " NO es una afición permitida";
                }
            }
            echo "Aficiones OK </br>";
            $aficiones = implode(", ", $aficiones);
        } else {
            echo "Aficiones MAL, no es un ARRAY </br>";
        }
    }
    //Exactamente igual que con la aficiones
    if (isset($_GET['menu'])) {
        $listaMenu = ["Macarrones con queso", "Albondigas con tomate", "Puchero de la mama", "Potaje de garbanzos"];
        $menu = $_GET['menu'];
        if (is_array($menu)) {
            foreach ($menu as $clave => $valor) {
                if (!in_array($valor, $listaMenu)) {
                    echo  $valor, " NO es un menú permitido </br>";
                }
            }
            echo "Menú OK </br>";
            $menu = implode(", ", $menu);
        } else {
            echo "Menú MAL, no es un ARRAY </br>";
        }
    }

} else {
    $nombre = $_GET['nombre'] ?? "";
    $apellidos = $_GET['apellidos'] ?? "";
    $email =  $_GET['email'] ?? "";
    $url = $_GET["url"] ?? "";
    $sexo = $_GET["sexo"] ?? "";
    $convivientes = $_GET["convivientes"] ?? "";
    $aficiones = $_GET["aficiones"] ?? [];
    $menu =  $_GET["menu"] ?? [];


?>
    <!-- El metodo debe ser GET para hacer comprobaciones por URL -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <p><label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?= $nombre ?>" required="true">
        </p>
        <p><label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" value="<?= $apellidos ?>" required="true">
        </p>
        <p><label for="url">URL: </label>
            <input type="url" name="url" id="url" value="<?= $url ?>" required="true">
        </p>
        <p><label for="email">Email </label>
            <input type="email" name="email" id="email" value="<?= $email ?>" required="true">
        </p>
        <!-- El formulario recodará la opción marcada anteriormente. Lo mismo haremos con la checkbox y la opcion múltiple -->
        <p><label for="hombre">Hombre </label>
            <input type="radio" name="sexo" id="hombre" value="hombre" required="true" <?php if ($sexo == "hombre") echo 'checked="checked"'; ?>>
        </p>
        <p><label for="mujer">Mujer </label>
            <input type="radio" name="sexo" id="mujer" value="mujer" required="true" <?php if ($sexo == "mujer") echo 'checked="checked"'; ?>>
        </p>
        <p><label for="convivientes">Nº de convivientes: </label>
            <input type="number" name="convivientes" id="convivientes" value="<?= $convivientes ?>" min="0" max="10" required="true">
        </p>
        <p><input type="checkbox" name="aficiones[]" id="aficiones" value="musica" <?php if (in_array("musica", $aficiones)) echo 'checked="checked"'; ?> />
            <label for="aficiones">Musica</label>
        </p>
        <p><input type="checkbox" name="aficiones[]" id="aficiones" value="football" <?php if (in_array("football", $aficiones)) echo 'checked="checked"'; ?> />
            <label for="aficiones">Football</label>
        </p>
        <p><input type="checkbox" name="aficiones[]" id="aficiones" value="anime" <?php if (in_array("anime", $aficiones)) echo 'checked="checked"'; ?> />
            <label for="aficiones">Anime</label>
        </p>
        <p><input type="checkbox" name="aficiones[]" id="aficiones" value="comida" <?php if (in_array("comida", $aficiones)) echo 'checked="checked"'; ?> />
            <label for="aficiones">Comida</label>
        </p>

        <p><label for="menu">Menú favorito</label>
            <select multiple name="menu[]" id="menu">
                <option value="Macarrones con queso" <?php if (in_array("Macarrones con queso", $menu)) echo 'selected="selected"'; ?>>Macarrones con queso</option>
                <option value="Albondigas con tomate"<?php if (in_array("Albondigas con tomate", $menu)) echo 'selected="selected"'; ?>>Albondigas con tomate</option>
                <option value="Puchero de la mama" <?php if (in_array("Puchero de la mama", $menu)) echo 'selected="selected"'; ?>>Puchero de la mama</option>
                <option value="Potaje de garbanzos" <?php if (in_array("Potaje de garbanzos", $menu)) echo 'selected="selected"'; ?>>Potaje de garbanzos</option>
            </select>
        </p>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
<?php } ?>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th class="col">Nombre</th>
                <th class="col">Apellidos</th>
                <th class="col">email</th>
                <th class="col">URL</th>
                <th class="col">Sexo</th>
                <th class="col">Convivientes</th>
                <th class="col">Aficiones</th>
                <th class="col">Menú favorito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                echo "<td>" . $nombre .  "</td>";
                echo "<td>" . $apellidos .  "</td>";
                echo "<td>" . $email .  "</td>";
                echo "<td>" . $url .  "</td>";
                echo "<td>" . $sexo .  "</td>";
                echo "<td>" . $convivientes .  "</td>";
                echo "<td>" . $aficiones.  "</td>";
                echo "<td>" . $menu . "</td>";
                ?>
            </tr>
        </tbody>
    </table>
</div>