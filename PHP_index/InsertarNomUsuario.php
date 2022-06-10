<?php
    $query = "SELECT NombreUsuario FROM `usuario` WHERE idUsuario = {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo ("<span id='nom_u'>{$row["NombreUsuario"]}</span>");
            }
        }
        else
            echo "<script>alert('ERROR: USUARIO NO ENCONTRADO')</script>";
    }
    else {
        echo "<script>añert('ERROR DE CONEXIÓN')</script>";
    }
?>