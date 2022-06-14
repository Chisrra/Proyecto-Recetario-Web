<?php
    if(isset($_POST["actualizar_foto"])) {
        $id = $_SESSION['idUsuario'];

        $img_name = $_FILES['selec_archivo']['name'];
        $img_type = $_FILES['selec_archivo']['type'];
        $img = fopen($_FILES['selec_archivo']['tmp_name'], 'r');
        $bin = fread($img, $_FILES['selec_archivo']['size']);
        $bin = mysqli_escape_string($conn, $bin);
    
        $secuencia = "UPDATE usuario SET ImagenPerfil = '$bin', NombreImagen = '$img_name', Tipo = '$img_type' WHERE idUsuario = '$id'";
        if (mysqli_query($conn,$secuencia)) {
            echo "<script>alert('¡ Foto de perfil actualizada !')</script>";
        }
        else {
            echo "<script>alert('Ocurrió un error, intentalo nuevamente...')</script>";
        }

        mysqli_close($conn);
        echo    '<script>
                setTimeout(function () {
                    window.location.href= "index.php";
                },1);</script>';
        die();
    }
?>