<?php
    $query = "SELECT * FROM `usuario` WHERE idUsuario = {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo (" <div id='perfil'>
                            <img id='perfil_img' src='data:{$row["Tipo"]};base64,".base64_encode($row["ImagenPerfil"])."' alt='{$row["NombreImagen"]}'>
                        </div>
                        <div id='edit'>
                            <img src='IMG\Edit.png' alt='editar.png' id='edit_img'>
                        </div>
                        <span id='nom_u'>{$row["NombreUsuario"]}</span>
                        <form action='Resultado.php' method='POST' enctype='multipart/form-data' target='_blank'>
                            <input type='file' name='selec_archivo' id='selec' accept='.jpg,.png,.jpeg'>
                            <input type='submit' value='' id='enviar'>
                        </form>
                        ");
                        
            }
        }
        else
            echo "<script>alert('ERROR: USUARIO NO ENCONTRADO')</script>";
    }
    else {
        echo "<script>añert('ERROR DE CONEXIÓN')</script>";
    }
?>