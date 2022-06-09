<!-- DOC HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\singUp.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Crea tu recetario</title>
</head>

<body>
    <div class="container rounded" id="registro">
        <h1>Crea tu cuenta</h1>
        <h2>Ingresa tus datos para empezar a hacer tu recetrio</h2>
        <br />
        <form method="post">
            <div class="mb-3">
                <label for="nuevoUsuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="nuevoUsuario" name="nuevoUsuario" placeholder="Nuevo Usuario :D" onfocusout="hola()" required>
            </div>
            <div class="mb-3">
                <label for="nuevoCorreo" class="form-label">Ingrese su correo</label>
                <input type="email" class="form-control" id="nuevoCorreo" name="nuevoCorreo" placeholder="usuarioRecetario@company.type" required>
            </div>
            <div class="mb-3">
                <label for="passwordUser" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordUser" name="passwordUser" aria-describedby="passwordHelp" required>
                <div id="passwordHelp" class="form-text">Nunca compartas tu contraseña</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showC">
                <label class="form-check-label" for="showC">Mostrar Contraseña</label>
            </div>
            <button type="submit" name="Registro" class="btn btn-success">Registrar</button>
            <button class="btn btn-secondary" type="button" style="float: right;" onclick="location.href='login.php'">Iniciar sesión</button>
        </form>
    </div>

    <!-- jquery  -->
    <script type="text/javascript">
        $(document).ready(() => {

            // Mostrar contaseña
            $('#showC').on('change', () => {
                if ( $('#showC').is(':checked') ) {
                    $('#passwordUser').removeAttr('type');
                } else {
                    $('#passwordUser').attr('type','password');
                }
            });
            // Fin mostrar contaseña
        });
    </script>
    <!-- Fin jquery -->
</body>

</html>
<!-- Fin del documento HTML -->
<?php
if (isset($_POST['Registro'])) {
    //---Validar
    $valido = true;
    function buscarRegistro($conn, $query, $dato, $campo)
    {
        global $valido;
        if (mysqli_query($conn, $query)) {
            if (mysqli_affected_rows($conn) != 0) {
                echo "<div class='alert alert-warning container' role='alert'>El $campo '$dato' ya esta en uso!</div>";
                $valido = false;
            }
        } else {
            echo "<div class='alert alert-danger container' role='alert'>¡Hubo un error al hacer el registro!</div>";
            exit;
        }
    }
    //---Fin validar
    require_once 'conexion.php';
    session_start();

    $nombreUsuario = $_POST['nuevoUsuario'];
    $email = $_POST['nuevoCorreo'];
    $query = "SELECT `NombreUsuario` FROM `usuario` WHERE `NombreUsuario` = '$nombreUsuario'";
    buscarRegistro($conn, $query, $nombreUsuario, "nombre de usuario");
    $query = "SELECT `Correo` FROM `usuario` WHERE `Correo` = '$email'";
    buscarRegistro($conn, $query, $email, "correo electronico");
    if ($valido) {
        $password = $_POST['passwordUser'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $bits = strlen($password_hash);
        //Poner imagen default
        $tipoArchivo = 'image/jpg';
        $nombreArchivo = 'default_user.jpg';
        $sizeArchivo = filesize("IMG\default_user.jpg");
        $imagenDefault = fopen('IMG\default_user.jpg', 'r');
        $imagenDefaultBinaria = fread($imagenDefault, $sizeArchivo);
        $imagenDefaultBinaria = mysqli_escape_string($conn, $imagenDefaultBinaria);
        //Fin de imagen default

        $query = "INSERT INTO `usuario`(`Correo`, `Contraseña`, `NombreUsuario`, `NombreImagen`, `ImagenPerfil`, `Tipo`) VALUES ('$email','$password_hash','$nombreUsuario','default_user.jpg','$imagenDefaultBinaria','image/jpg')";
        if (mysqli_query($conn, $query)) {
            $query = "SELECT `idUsuario` FROM `usuario` WHERE `NombreUsuario` = '$nombreUsuario'";
            if ($rs = mysqli_query($conn, $query)) {
                $fila = mysqli_fetch_array($rs);
                $_SESSION['idUsuario'] = $fila['idUsuario'];
                echo '<script>
                    window.location.href= "../Proyecto-Recetario-Web";
                    alert("¡Registro exitoso!");
                </script>';
                mysqli_close($conn);
                // header("Location: ../Proyecto-Recetario-Web", TRUE, 301);
                exit();
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'> -Algo ha salido mal, intentelo de nuevo por favor</div>";
        }
    }
}
?>