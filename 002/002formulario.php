<?php
$formulario = [
    $nombre = $_POST["nombre"],
    $apellidos = $_POST["apellidos"],
    $url = $_POST["url"],
    $sexo = $_POST["sexo"],
    $convivientes = $_POST["number"],
    //implode para transformar arrays en strings
    $aficiones = implode(", ", $_POST["aficiones"]),
    $menu = implode(", ", $_POST["multi"]),

];
?>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th class="colk">Nombre</th>
                <th class="col">Apellidos</th>
                <th class="col">URL</th>
                <th class="col">Sexo</th>
                <th class="col">Convivientes</th>
                <th class="col">Aficiones</th>
                <th class="col">Menú favorito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($formulario as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }

                ?>
            </tr>
        </tbody>
    </table>
</div>