<?php
function mostrarUsuarios($conexion) { 
	$resultado = $conexion->query("SELECT * FROM Usuarios"); 
	echo "<h3>Usuarios:</h3>"; 
	while ($fila = $resultado->fetch_assoc()) { 
		echo $fila['numero'] . " - " . $fila['nombre'] . " - " . $fila['email'] . "<br>"; 
		} 
	} 
?>
