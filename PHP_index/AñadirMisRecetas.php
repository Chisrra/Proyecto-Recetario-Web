<?php
    $query = "SELECT * FROM receta WHERE Usuario_idUsuario = {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        $row = mysqli_num_rows($result);
        if ($row) {
            while($fil = $result->fetch_assoc()) {
                echo (' <div class="receta">
                            <div class="imagen_r"><img src="data:;base64,'.base64_encode($fil["Foto_Platillo"]).'" alt="receta'.$row.'.jpg"></div>
                            <div class="texto">
                                <span class="titulo">'.$fil["Nombre_Receta"].'</span>
                                <span class="descripcion">'.$fil["Descripcion_Breve"].'</span>
                            </div>
                            <div class="btns">
                                <button type="submit" class="btn modif" title="Modificar receta">'.$fil["id"].'</button>
                                <button type="submit" class="btn elim" title="Eliminar receta">'.$fil["id"].'</button>
                            </div>
                        </div>
                     ');
            }
        }
        else {
            echo ('<p id="empty">No tienes recetas</p>');
        }
    }
?>