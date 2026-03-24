<?php
    // función que mezcla usando random_int + Fisher Yates
function mezclarFisherYates($cadena) {
    $array = str_split($cadena);
    $n = count($array);

    for ($i = $n - 1; $i > 0; $i--) {
        $j = random_int(0, $i);
        [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
    }

    return implode("", $array);
}

function generadorPasswd($longitud = 30) {
    // letras, numeros y simbolos que quieras tener (hay Ññ)

    $min = "abcdefghijklmnñopqrstuvwxyz";
    $mayus = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    
    $num = "1234567890";
    $simbol = "!€%&/ªº`?@#^_-=+*[](){}<>,.;:";
    
    // cadena con todos los caracteres disponibles
    $todos = $mayus . $min . $num . $simbol;

    $contrasena = "";

    // agregamos un cáracter aleatorio de cada tipo gracias al random (el " - 1" es porque empieza en 0)
    
    $contrasena .= $min[random_int(0, strlen($min) - 1)];
    $contrasena .= $mayus[random_int(0, strlen($mayus) - 1)];
    $contrasena .= $num[random_int(0, strlen($num) - 1)];
    $contrasena .= $simbol[random_int(0, strlen($simbol) - 1)];

    // rellenamos el resto (empezamos en 4 porque hemos metido antes 4 caracteres)
    for ($i = 4; $i < $longitud; $i++) {
        $contrasena .= $todos[random_int(0, strlen($todos) - 1)];
    }

    // mezclamos los caracteres
    return mezclarFisherYates($contrasena);
}

// Ejemplos de uso
echo generadorPasswd() . "\n"; // Por defecto
echo generadorPasswd(8); // Con parametro
