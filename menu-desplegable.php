<!-- <link rel="stylesheet" href="CSS\menu-desplegable_css.css"> -->
<?php ?>

<!-- Inicio del Menu desplegable -->
<div class="btn-menu">
    <label for="btn-menu" id="ham_btn">☰</label>
</div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
    <div class="cont-menu">
        <nav>
            <a href="../Proyecto-Recetario-Web/" id="logo" title="Inicio">
                <img src="IMG\logo.png" alt="logo.png">
                <span>Recetado</span>
            </a>
            <a href="altas.php">Crear receta</a>
            <a href="#">Mis recetas</a>
            <a href="#">Explorar más recetas</a>
            
            <form method="post" action='logout.php'>
                <button type="submit" id="close" name='close'>Cerrar sesión</button>
            </form>
            <!-- <a href="#" id="close">Cerrar sesión</a> -->
        </nav>
        <label for="btn-menu" id="close_btn">❌</label>
    </div>
</div>
<!-- Fin del menu desplegable -->
