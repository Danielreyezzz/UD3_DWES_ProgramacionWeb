<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <form action='010login.php' method='post'>
            <h1>Login</h1>
                <div>
                    <label for='usuario'>Usuario:</label><br />
                    <input type='text' name='usuario' id='usuario'/><br />
                </div>
                <div>
                    <label for='password'>Contraseña:</label><br />
                    <input type='password' name='contraseña' id='contraseña' /><br />
                </div>
                <div class='m-5'>
                    <input class="btn btn-primary" type='submit' name='enviar' value='Enviar' />
                </div>
           
        </form>
    </div>
</body>

</html>