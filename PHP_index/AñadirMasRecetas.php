<?php
    $fila = 0;

    $query = "SELECT * FROM receta WHERE Usuario_idUsuario != {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        $row = mysqli_num_rows($result);
        if ($row) {
            while($fil = $result->fetch_assoc()) {
                if (++$fila == $row) echo ('<div class="receta last">');
                else {
                    if ($fila == 1) echo('<div class="receta first sup">');
                    else echo('<div class="receta sup">');
                }

                if ($fila == 1) echo('<div class="imagen_r first_i">');
                else if ($fila == $row) echo('<div class="imagen_r last_i">');
                else echo('<div class="imagen_r">');
                echo ('         <img src="data:;base64,'.base64_encode($fil["Foto_Platillo"]).'" alt="receta'.$row.'.jpg">
                            </div>
                            <div class="texto">
                                <span class="titulo">'.$fil["Nombre_Receta"].'</span>
                                <span class="descripcion">'.$fil["Descripcion_Breve"].'</span>
                            </div>
                            <div class="btns">
                                
                            </div>
                        </div>');
            }
        }
        else {
            echo ('<p class="empty ems">No existen recetas creadas por otros usuarios...</p>');
        }
    }
?>