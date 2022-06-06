<?php
    require_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recetario | Inicio</title>
    <link rel="icon" href="IMG/logo.ico">
    <link rel="stylesheet" href="CSS\index_css.css">
    <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
</head>
<body>
    <?php
        require_once "menu-desplegable.php";
    ?>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff4d" fill-opacity="1" d="M0,288L60,277.3C120,267,240,245,360,234.7C480,224,600,224,720,234.7C840,245,960,267,1080,266.7C1200,267,1320,245,1380,234.7L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    <!-- https://getwaves.io/ - Creación de DIVs con curva-->
    <div class="banner">
        <div id="title">
            <img src="IMG\logo.png" alt="logo.png">
            <span>Recetado</span>
        </div>
        <div id="user">
            <div id="perfil">
                <img src="IMG\default_user.jpg" alt="def.jpg">
            </div>
            <span id="nom_u">UsuarioRandom</span>
        </div>
    </div>
    <div id="subtitulo">
        ¡ Compartiendo tradiciones en nuestros paladares !
    </div>

    <script src="JS\index_js.js"></script>
</body>
</html>