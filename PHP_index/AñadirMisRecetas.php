<?php
    $fila = 0;

    $query = "SELECT * FROM receta WHERE Usuario_idUsuario = {$_SESSION['idUsuario']}";
    if ($result = mysqli_query($conn, $query)) {
        $row = mysqli_num_rows($result);
        if ($row) {
            while ($fil = $result->fetch_assoc()) {
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
                                    <form action="cambios.php" method="POST">
                                        <button type="submit" name="modif_r" value="'.$fil["id"].'" class="btn modif" title="Modificar receta"></button>
                                    </form>
                                    
                                    <button type="submit" value="'.$fil["id"].'" class="btn elim" title="Eliminar receta"></button>
                                </div>
                            </div>');
            }
        } else {
            echo ('<p class="empty">No tienes recetas, <a href="altas.php">¡ crea una !</a></p>');
        }
    }
?>