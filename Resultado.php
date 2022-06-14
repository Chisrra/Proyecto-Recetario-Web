<?php
    if(isset($_POST["actualizar_foto"])) {
        $id = $_SESSION['idUsuario'];

        if ($_FILES['selec_archivo']['name'] != null) {
            $img = fopen($_FILES['selec_archivo']['tmp_name'], 'r');
            $bin = fread($img, $_FILES['selec_archivo']['size']);
            $bin = mysqli_escape_string($conn, $bin);
    
            $secuencia = "UPDATE usuario SET ImagenPerfil = '$bin' WHERE idUsuario = '$id'";
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
        else {
            echo "<script>alert('Archivo no encontrado, intentalo nuevamente...')</script>";
        }
    }
?>