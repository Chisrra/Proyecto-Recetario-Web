<!-- DOC HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/logo.ico">
    <link rel="stylesheet" type="text/css" href="CSS/logIn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="JS/jquery.js" type="text/javascript"></script>
    <title>Tu recetario Web</title>
</head>

<body>
    <div class="container rounded" id="log">
        <h1>Iniciar sesión</h1>
        <br />
        <h2>Pon tus datos para ir a tu recetario</h2>
        <form method="post">
            <div class="mb-3">
                <label for="logCorreo" class="form-label">Ingrese su correo</label>
                <input type="email" class="form-control" id="logCorreo" name="logCorreo" placeholder="usuarioRecetario@company.type" autofocus required>
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
            <a class="btn btn-light" href="signup.php" style="background-color:#BDE3E3;">Registrarse :D</a>
            <button type="submit" name="Log" class="btn btn-dark" style="float: right; margin-right:2vw; padding-left:4%; padding-right:4%;">Ingresar</button>
        </form>
    </div>

    <!-- jquery  -->
    <script type="text/javascript">
        $(document).ready(function(){

            // Mostrar contaseña
            if( $('#showC').on('change', function(){
                if( $('#showC').is(':checked')){
                    $('#passwordUser').removeAttr('type');
                }else{
                    $('#passwordUser').attr('type','password');
                }
            }));

            // Fin mostrar contaseña
            
        });

    </script>
    <!-- jquery  -->

</body>

</html>
<!-- Fin del documento HTML -->

<?php
if (isset($_POST['Log'])) {
    include_once 'conexion.php';
    session_start();

    $correo = $_POST['logCorreo'];
    $password = $_POST['passwordUser'];

    $query = "SELECT `idUsuario`,`Correo`,`Contraseña` FROM `usuario` WHERE `Correo` = '$correo'";
    if ($rs=mysqli_query($conn, $query)) {
        if (mysqli_affected_rows($conn) == 0) {
            echo "<div class='alert alert-warning container' role='alert'>El $correo no esta registrado</div>";
        } else {
            $fila = mysqli_fetch_array($rs);
            if(password_verify($password,$fila['Contraseña'])){
                $_SESSION['idUsuario'] = $fila['idUsuario'];
                echo '<script>
                    window.location.href= "../Proyecto-Recetario-Web";
                    alert("¡Ingreso exitoso!");
                </script>';
                mysqli_close($conn);
                // header("Location: ../Proyecto-Recetario-Web", TRUE, 301);
                exit();
            }else{
                echo "<div class='alert alert-warning container' role='alert'>La contraseña es incorecta!</div>";
            }
        }
    }
}
?>