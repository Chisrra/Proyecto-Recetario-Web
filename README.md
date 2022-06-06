# Proyecto-Recetario
 Proyecto solicitado por la materia de lenguajes de computacion IV en junio 2022
##  Proposito
 Este proyecto no esta hecho con fines lucrativos y será utilizado para fines educativos.
 Este es un proyecto que cualquier persona puede consultar.

### Como usar [conexion.php](conexion.php)
Para poder hacer uso de la varible ` $conn ` en sus archivos deben poner **` require_once 'conexion.php'; `** al inicio de sus archivos php. Es cómo si inyectaran o insertaran el codigo de este archivo en esa sección especifica del documento.
Al finalizar sus operaciones por favor usen la instrucción ***` mysqli_close($conn); `***.

### Como agregar [menu-desplegable.php](menu-desplegable.php)
Para poder hacer uso del menu despleglable en sus paginas tienen que hacer lo siguiente.
1. Deben poner **` <?php require_once "menu-desplegable.php"; ?> `** en la primera linea de codigo dentro del ***`body`*** de sus documentos *`HTML`*
2. Deben poner **` <link rel="stylesheet" href="CSS\menu-desplegable_css.css"> `** dentro de sus ***` <head></head> `*** de los documentos *`HTML`*.

### La forma de redirigirnos a [index](index.php)
La mejor forma de redirigirnos al [index](index.php) es accediendo a la carpeta de nuestro proyecto, de esta manera no veremos en el URL *index.php* y sólo la dirección del proyecto. 

Para acceder a este debemos buscar la dirección de nuestro proyecto, por ejemplo, en el archivo [signup](signup.php) es un archivo que esta en nuestro 1er nivel del proyecto, por lo que su direccion hacía el [index](index.php) sería: *`../Proyecto-Recetario-Web`*. Ejemplos de como implementarlo.
- **JavaScript:**`window.location.href= "../Proyecto-Recetario-Web";`.
- **PHP:**`header("Location: ../Proyecto-Recetario-Web",TRUE,301);`.

Esto sucede porque el navegador automaticamente busca el archivo ***index*** dentro del proyecto.
