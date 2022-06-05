<?php?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
    </head>
    <body>
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
                    <a href="#" id="close">Cerrar sesión</a>
                </nav>
                <label for="btn-menu">❌</label>
            </div>
        </div>
    </body>
</html>