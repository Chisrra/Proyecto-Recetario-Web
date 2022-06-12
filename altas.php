<html>
    <head>
    <meta charset="UTF-8">
        <title>conexion con una BD</title>
        <meta name="iewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="CSS/AltasCss.css">
        <link rel="icon" href="IMG/logo.ico">
        <link rel="stylesheet" href="CSS\menu-desplegable_css.css">
    <script src="JS/jquery.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
</html>
<?php
    require_once "conexion.php";
    
        //---Validar
        $valido = true;
        function buscarRegistro($conn, $query, $dato, $campo)
        {
            global $valido;
            if (mysqli_query($conn, $query)) {
                if (mysqli_affected_rows($conn) != 0) {
                    echo "<script>alert('El platillo ya existe en la BD');
                    window.location='/programas/conexion a BD/proyecto/Proyecto-Recetario-Web/altasFR.php' </script>";
                    $valido = false;
                }
            } else {
                echo "<div class='alert alert-danger container' role='alert'>¡Hubo un error al hacer el registro!</div>";
                exit;
            }
        }
    $nombreR = $_POST['nombre_receta'];
    $query = "SELECT `Nombre_Receta` FROM `receta` WHERE `Nombre_Receta` = '$nombreR'";
    buscarRegistro($conn, $query, $nombreR, "nombre de receta");
if($valido){    
    $nombre=$_POST["nombre_receta"];
    $descripcion=$_POST["Descripcion_Breve"];
    $ingredientes=$_POST["ingredientes"];
    $proceso=$_POST["proceso"];
    $foto=addslashes(file_get_contents($_FILES['foto_platillo']['tmp_name']));
    $FechaC=$_POST["fechaC"];
    $usuario=$_POST["Autor"];

        if(isset($_FILES['foto_platilo']['name'])){
            $tipoArchivo=$_FILES['foto_platillo']['type'];
            $nombreArchivo=$_FILES['foto_platillo']['name'];
            $tamArchivo=$_FILES['foto_platillo']['size'];
            $imgcrg=fopen($_FILES['foto_platillo']['tmp_name'],'r');
            $binario=fread($imgcrg,$tamArchivo);
            $binario=mysqli_escape_string($conn,$binario);
        }
    $inserta="INSERT INTO receta(Nombre_Receta,Descripcion_Breve,Ingredientes,Proceso,Foto_Platillo,Fecha_creacion,Fecha_UltimaEdicion,Usuario_idUsuario) VALUES ('$nombre','$descripcion','$ingredientes','$proceso','$foto','$FechaC','$FechaC','$usuario')";
    $resultado=mysqli_query($conn,$inserta);
    if($resultado){
        echo "<script>alert('se ha registrado correctamente al usuario');
        window.location='/programas/conexion a BD/proyecto/Proyecto-Recetario-Web' </script>";
    }else{
        echo "<script>alert('no se pudo registrar'); window.history.go(-1);</script>";
    }
}
?>