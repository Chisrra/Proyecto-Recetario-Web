<?php
    require_once "conexion.php";
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link href="CSS/cambios_css.css" rel="stylesheet" type="text/css">
    <title>Cambios en las recetas</title>

</head>

<body>
    <div class="container" id="banner">
        <img id="img_bann" src="IMG/ImagenBanner_cambios.jpeg">
        <b><p id="pban">CAMBIOS</p></b>
    </div>

    <div class="container" id="formulario">
        <form method="POST" >
        <div class="mb-3">
            <label for="id" class="form-label"><p id="labform">Id de la receta</p></label>
            <input type="text" class="form-control" id="id_input" >
        </div>

        <div class="mb-3">
            <center>
            <input type="button" value="Buscar receta" id="botonbusc" class="btn btn-outline-danger">
            </center>
        </div>

        <div class="linea">

        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label"><p id="labform">Nombre</p></label>
            <input type="text" class="form-control" id="Nombre_input" >
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label"><p id="labform">Descripcion</p></label>
            <textarea class="form-control" id="Descripcion_input" rows="3"></textarea>
        </div>

        <form>
        <div class="mb-3">
            <label for="Ingredientes" class="form-label"><p id="labform">Ingredientes</p></label>
            <input type="text" class="form-control" id="Ingredientes_input" >
        </div>

        <div class="mb-3">
            <label for="Proceso" class="form-label"><p id="labform">Proceso</p></label>
            <textarea class="form-control" id="Proceso_input" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label"><p id="labform">Imagen de la receta</p></label>
            <input type="file" class="form-control" id="img_input" >
        </div>
       
        <div class="mb-3">
            <center>
            <input type="button" value="Aceptar cambios" id="botonenv" class="btn btn-outline-danger">
            </center>
        </div>
        
        </form>
    </div>


</body>

</html>