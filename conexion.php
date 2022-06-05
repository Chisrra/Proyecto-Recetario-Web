<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('BD','proyecto-recetario');
$conn = mysqli_connect(HOST, USER, PASSWORD, BD);

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
// echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL;
?>