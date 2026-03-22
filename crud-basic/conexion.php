<?php

function conectarBD() {
$servidor = "localhost";
$usuario = "flotante";
$clave = "flotante";
$dbname = "Pruebas";
//Crear la conexion
mysqli_report(MYSQLI_REPORT_OFF);
$conexion=mysqli_connect($servidor, $usuario, $clave, $dbname);
//Si falla la conexion
if (!$conexion) {
	die("Error de conexión: " . mysqli_connect_error());
	}
echo "Conectando a MySQL<br>";
return $conexion;
}

?>
