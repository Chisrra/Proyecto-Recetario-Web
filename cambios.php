<?php
    require_once "conexion.php";
    require_once "cambios_SQL.php";
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
    <link href="CSS/cambios_css.css" rel="stylesheet" type="text/css">
    <title>Cambios en las recetas</title>

</head>

<body>
    <?php
    require_once "menu-desplegable.php";
    ?>
    <div class="container" id="banner">
        <img id="img_bann" src="IMG/ImagenBanner_cambios.jpeg">
        <b><p id="pban">CAMBIOS</p></b>
    </div>

    <div class="container" id="formulario">
        <form method="POST" action="cambios.php" enctype="multipart/form-data" >
        <div class="mb-3">
            <label for="id" class="form-label"><p id="labform"  >Id de la receta</p></label>
            <input type="text" class="form-control" id="id_input" name="id" <?php if(isset($id)) { ?> value="<?php echo $id; ?>" <?php } ?> readonly>
        </div>

        <div class="mb-3">
            <center>
            <input type="submit" value="Buscar receta" id="botonbusc" class="btn btn-outline-danger" name="boton_buscar">
            </center>
        </div>

        <div class="linea">

        </div>
        <?php

        ?>

        <div class="mb-3">
            <label for="nombre" class="form-label"><p id="labform">Nombre</p></label>
            <input type="text" class="form-control" id="Nombre_input" name="nombre" <?php if(isset($nombre)) { ?> value="<?php echo $nombre; ?>" <?php } ?>>
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label"><p id="labform">Descripcion</p></label>
            <textarea class="form-control" id="Descripcion_input" rows="3" name="descripcion" ><?php if(isset($descripcion)) { echo $descripcion; ?> <?php } ?></textarea>
        </div>

        <form>
        <div class="mb-3">
            <label for="Ingredientes" class="form-label"><p id="labform">Ingredientes</p></label>
            <input type="text" class="form-control" id="Ingredientes_input" name="ingredientes" <?php if(isset($ingredientes)) { ?> value="<?php echo $ingredientes; ?>" <?php } ?>>
        </div>

        <div class="mb-3">
            <label for="Proceso" class="form-label"><p id="labform">Proceso</p></label>
            <textarea class="form-control" id="Proceso_input" rows="6" name="proceso"><?php if(isset($proceso)) { echo $proceso; ?> <?php } ?></textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label"><p id="labform">Imagen de la receta</p></label>
            <div class="imgreceta"><img  <?php if(isset($foto)) {  $tipo=$_FILES['receta']['type']; ?> src="data:image/<?php $tipo;?>;base64,<?php echo base64_encode( $foto); ?>" <?php } ?>></div>
            <label for="cambiarfoto" class="form-label"><p id="labform">Seleccionar una foto nueva...</p></label>
            <input type="file" class="form-control" id="img_input"  name="receta" accept=".jpg,.png,.jpeg">
        </div>
       
        <div class="mb-3">
            <center>
            <input type="submit" value="Aceptar cambios" id="botonenv" class="btn btn-outline-danger" name="boton_enviar">
            </center>
        </div>
        
        </form>
    </div>

    <?php 
        if(isset($_POST["modif_r"])) {
            $id = $_POST["modif_r"];
            echo (' <script>
                        const inp = document.getElementById("id_input");
                        const btn = document.getElementById("botonbusc");
                        inp.value = '.$id.';
                        btn.click();
                    </script>');
        }
    ?>
</body>

</html>