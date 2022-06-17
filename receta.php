<?php
require_once 'conexion.php';
session_start();
$idReceta = $_GET['id'];
$query = "SELECT * FROM `receta` WHERE `id`='$idReceta'";
if ($rs = mysqli_query($conn, $query)); {
    $fila = $rs->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/estilosReceta.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="icon" href="IMG/logo.ico">
    <title>Receta|cambiar</title>
</head>

<body>
    <!-- Inicio del la barrak -->
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #1c1c1c;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Proyecto-Recetario-Web">
                <img src="IMG/logo.png" alt="Logo de la pagina" height="50vh" srcset="">
                Recetado
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['idUsuario'])) {
                            echo "<a class=\"nav-link active\" aria-current=\"page\" href=\"../Proyecto-Recetario-Web\">Inicio 🌮</a>";
                        } else {
                            echo "<a class=\"nav-link active\" aria-current=\"page\" href=\"login.php\">Iniciar sesión 🎫</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- fin barra -->
    <div class="container2">
        <div class="row align-items-start">
            <div class="col">
                <div class="contenido">
                    <h1><?php echo "{$fila['Nombre_Receta']}"; ?></h1>
                    <p id="desc"><?php echo "{$fila['Descripcion_Breve']}"; ?></p>
                </div>
            </div>
            <div class="col">
                <div id="contenedorImg">
                    <img <?php echo 'src="data:;base64,' . base64_encode($fila["Foto_Platillo"]) . '" alt="receta' . $fila["Nombre_Receta"] . '.jpg" ' ?> >
                </div>
            </div>
        </div>
        <div class="row align-items-start" style="margin-top:3vh;">
            <div class="col">
                <div class="contenido">
                    <h2>Ingredientes</h2>
                    <p><?php echo "{$fila['Ingredientes']}" ?></p>
                </div>
            </div>
            <div class="col">
                <div class="contenido">
                    <h2>Preparación</h2>
                    <p><?php echo "{$fila['Proceso']}"; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>