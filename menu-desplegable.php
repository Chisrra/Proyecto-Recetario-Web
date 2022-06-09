<!-- <link rel="stylesheet" href="CSS\menu-desplegable_css.css"> -->
<?php ?>

<!-- Inicio del Menu desplegable -->
<div class="btn-menu">
    <label for="btn-menu">☰</label>
</div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
    <div class="cont-menu">
        <nav>
            <a href="index.php" id="logo" title="Inicio">
                <img src="IMG\logo.png" alt="logo.png">
                <span>Recetado</span>
            </a>
            <a href="#">Crear receta</a>
            <a href="#">Mis recetas</a>
            <a href="#">Explorar más recetas</a>
            
            <form action="" method="$_POST">
                <button type="submit" id="close">Cerrar sesión</button>
            </form>
            <!-- <a href="#" id="close">Cerrar sesión</a> -->
        </nav>
        <label for="btn-menu">❌</label>
    </div>
</div>
<!-- Fin del menu desplegable -->
