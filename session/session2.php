 <?php

 session_start();
 $_SESSION["nombre"] = ($_REQUEST["nombre"]);
 $_SESSION["clave"] = ($_REQUEST["contrasena"]);
 
 $contrasena_real = "Pinguino.2024";
 $nombre_real = "nihilista";
 
if ($_SESSION["nombre"] == $nombre_real && $_SESSION["clave"] == $contrasena_real){
	$patron_mayus = "/^[A-Z]/";
	$patron_simbolo = "/[!-.]/"; // contraseña valida que empieza por MAYUSCULA, LONGITUD 8 y 1 SIMBOLO
	
if (strlen($contrasena_real) >= 8) {
        if (preg_match($patron_mayus, $contrasena_real)) {
            if (preg_match($patron_simbolo, $contrasena_real)) {
                echo "Bienvenido Usuario " . $nombre_real;
            } else {
                echo "Contraseña NO válida: falta  símbolo.";
            }
        } else {
            echo "Contraseña NO válida: falta  mayúscula.";
        }
    } else {
        echo "Contraseña NO válida: demasiado corta.";
    }
} else {
    echo "Error de usuario o contraseña";
}

session_destroy();
 ?>


