<?php
function conectarBD() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd   = "instituto";

    mysqli_report(MYSQLI_REPORT_OFF);
    $conexion = mysqli_connect($host, $user, $pass, $bd);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $conexion;
}
?>
