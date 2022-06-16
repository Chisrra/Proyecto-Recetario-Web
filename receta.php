<?php
require_once 'conexion.php';
$idReceta = $_GET['id'];
$query = "SELECT * FROM `receta` WHERE `id`='$idReceta'";
echo "ID de la receta $idReceta";

?>
