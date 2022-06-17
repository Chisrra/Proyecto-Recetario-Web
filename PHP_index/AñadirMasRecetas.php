<?php
    $fila = 0;

    $query = "SELECT * FROM receta WHERE Usuario_idUsuario != {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        $row = mysqli_num_rows($result);
        if ($row) {
            while($fil = $result->fetch_assoc()) {
                $other_quer = "SELECT NombreUsuario FROM usuario WHERE idUsuario = {$fil["Usuario_idUsuario"]}";
                $other_r = mysqli_query($conn, $other_quer);
                $other = mysqli_fetch_array($other_r);

                if ($row == 1) {
                    echo ("<div class='receta first last'>");
                    echo ('<a href="receta.php?id='.$fil["id"].'" class="imagen_r first_i last_i">');
                }
                else {
                    if (++$fila == $row) echo ("<div class='receta last'>");
                    else {
                        if ($fila == 1) echo ('<div class="receta first sup">');
                        else echo ('<div class="receta sup">');
                    }

                    if ($fila == 1) echo ('<a href="receta.php?id='.$fil["id"].'" class="imagen_r first_i">');
                    else if ($fila == $row) echo ('<a href="receta.php?id='.$fil["id"].'" class="imagen_r last_i">');
                    else echo ('<a href="receta.php?id='.$fil["id"].'" class="imagen_r">');
                }
                echo ('             <img src="data:;base64,' . base64_encode($fil["Foto_Platillo"]) . '" alt="receta' . $row . '.jpg">
                                </a>
                                
                                <a href="receta.php?id='.$fil["id"].'" class="texto">
                                    <span class="titulo">' . $fil["Nombre_Receta"] . '</span>
                                    <span class="descripcion">' . $fil["Descripcion_Breve"] . '</span>
                                </a>

                                <div class="btns">
                                    <span class="autor"><b>Autor:</b> '.$other["NombreUsuario"].'</span>
                                </div>
                            </div>');
            }
        }
        else {
            echo ('<p class="empty ems">No existen recetas creadas por otros usuarios...</p>');
        }
    }
?>