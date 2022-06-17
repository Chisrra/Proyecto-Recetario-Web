<?php
    session_start();
    if (!isset($_SESSION['idUsuario'])) {
        header('Location: login.php');
        exit;
    } else {
        require_once "conexion.php";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Recetario | Crear receta</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
        <link rel="stylesheet" href="CSS/Alta_Css.css">
        <link rel="icon" href="IMG/logo.ico">
        <script src="JS/jquery.js" type="text/javascript"></script>
    </head>
<body>
    <?php require_once "menu-desplegable.php";?>
    <br>
<div class="formu" >
        <div class="banner" style="z-index: -1;" >
            <img src="IMG/comida.jpg" alt="imagen banner" class="ban" style="z-index: index -1;">
          <div class="info" style="z-index: index -2;"><h2>Dar de alta receta</h2></div>
        </div>
        <form action="altasP.php" method="post" enctype="multipart/form-data" class="form">
            <label for="nombre" class="formL">Nombre</label>  
            <input name="nombre_receta" type="text" class="formI" id="nombre">
            <br>
            <label for="descripcion" class="formL">Descripcion</label>
            <input name="Descripcion_Breve" type="text" class="formI" id="descripcion">
            <br>
            <label for="ingre" class="formL">Ingredientes</label>
            <input name="ingredientes" type="text" class="formI" id="ingre">
            <br>
            <br>
            <label for="pasos" class="formL">Proceso</label>
            <textarea name="proceso" style="width: 55vw; margin-top:3%; margin-left:3%;" rows="3" id="pasos"></textarea>
            <br>
            <br>
            <label for="foto_platillo" class="formL">Foto</label>
            <input name="foto_platillo" type="file" style="margin-top: 3%;margin-left:3%">
            <br>
            <br>
            <input class="bot" type="submit" value="Registrar">      
        </form>
    </div>
</body>

</html>


