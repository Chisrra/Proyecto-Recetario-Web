<?php
     require_once "conexion.php";
     require_once "menu-desplegable.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>conexion con una BD</title>
        <meta name="iewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="CSS/AltasCss.css">
        <link rel="icon" href="IMG/logo.ico">
        <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
        <script src="JS/jquery.js" type="text/javascript"></script>
    </head>
<body>
<div class="formulario">
        <div class="banner">
          <div class="info"><h2>Dar de alta receta</h2></div>
        </div>
        <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha_actual=date("Y-m-d H:i:s");
        ?>
        <form action="altas.php" method="post" enctype="multipart/form-data" class="form">
            <label for="" class="formL">Nombre</label>  
            <input name="nombre_receta" type="text" class="formI">
            <br>
            <label for="" class="formL">Descripcion</label>
            <input name="Descripcion_Breve" type="text" class="formI">
            <br>
            <label for="" class="formL">Ingredientes</label>
            <input name="ingredientes" type="text" class="formI">
            <br>
            <label for="" class="formL">Proceso</label>
            <input name="proceso" type="text" class="formI">
            <br>
            <label for="" class="formL">Foto</label>
            <input name="foto_platillo" type="file" class="formI">
            <br>
            <label for="" class="formL">Fecha de Creacion</label>
            <input name="fechaC" type="datetime" value="<?= $fecha_actual?>" class="formI">
            <br>
            <label for="" class="formL">Autor(ID)</label>
            <input name="Autor" type="number"  class="formI">
            <br>
            <input class="bot" type="submit" name="guardar" value="registrar">        
        </form>
    </div>
</body>

</html>


