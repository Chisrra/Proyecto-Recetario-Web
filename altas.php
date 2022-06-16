<?php
     require_once "conexion.php";
     require_once "menu-desplegable.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recetario | Crear receta</title>
        <meta name="iewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
        <link rel="stylesheet" href="CSS/AltaCss.css">
        <link rel="icon" href="IMG/logo.ico">
        <script src="JS/jquery.js" type="text/javascript"></script>
    </head>
<body>
<div class="formulario">
        <div class="banner">
            <img src="IMG/comida.jpg" alt="imagen banner" class="ban" >
          <div class="info" ><h2>Dar de alta receta</h2></div>
        </div>
        <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha_actual=date("Y-m-d H:i:s");
        ?>
        <form action="altasP.php" method="post" enctype="multipart/form-data" class="form">
            <label for="nombre_receta" class="formL">Nombre</label>  
            <input name="nombre_receta" type="text" class="formI">
            <br>
            <label for="Descripcion_Breve" class="formL">Descripcion</label>
            <input name="Descripcion_Breve" type="text" class="formI">
            <br>
            <label for="ingredientes" class="formL">Ingredientes</label>
            <input name="ingredientes" type="text" class="formI">
            <br>
            <label for="proceso" class="formL">Proceso</label>
            <input name="proceso" type="text" class="formI">
            <br>
            <br>
            <label for="foto_platillo" class="formL">Foto</label>
            <input name="foto_platillo" type="file" class="formI">
            <br>
            <label for="fechaC" class="formL">Fecha de Creacion</label>
            <input name="fechaC" type="datetime" value="<?= $fecha_actual?>" class="formI">
            <br>
            <label for="Autor" class="formL">Autor(ID)</label>
            <input name="Autor" type="number"  class="formI">
            <br>
            <input class="bot" type="submit" value="registrar">      
        </form>
    </div>
</body>

</html>


