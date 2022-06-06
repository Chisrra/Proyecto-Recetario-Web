# Proyecto-Recetario
 Proyecto solicitado por la materia de lenguajes de computacion IV en junio 2022
##  Proposito
 Este proyecto no esta hecho con fines lucrativos y será utilizado para fines educativos.
 Este es un proyecto que cualquier persona puede consultar.

### Como usar ' conexion.php '
Para poder hacer uso de la varible ` $conn ` en sus archivos deben poner **` require_once 'conexion.php'; `** al inicio de sus archivos php. Es cómo si inyectaran o insertaran el codigo de este archivo en esa sección especifica del documento.
Al finalizar sus operaciones por favor usen la instracción ***` mysqli_close($conn); `***.

### Como agregar ' menu-desplegable.php '
Para poder hacer uso del menu despleglable en sus paginas tienen que hacer lo siguiente.
1. Deben poner **` <?php require_once "menu-desplegable.php"; ?> `** en la primera linea de codigo dentro del ***`body`*** de sus documentos *`HTML`*
2. Deben poner **` <link rel="stylesheet" href="CSS\menu-desplegable_css.css"> `** dentro de sus ***` <head></head> `*** de los documentos *`HTML`*.
