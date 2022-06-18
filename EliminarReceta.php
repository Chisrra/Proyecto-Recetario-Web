<?php
    require_once "conexion.php";

    if(isset($_POST["id_er"])) {
        $query = "DELETE FROM receta WHERE id = {$_POST["id_er"]}";

        if (mysqli_query($conn,$query)) {
            echo "<script>alert('Registro borrado exitosamente')</script>";

            mysqli_close($conn);
            echo '  <script>
                    setTimeout(function () {
                    window.location.href= "index.php";
                    },1);</script>';
            die();
        }
        else {
            echo "<script>alert('ERROR: No existe ese registro')</script>";
        }
    }
?>