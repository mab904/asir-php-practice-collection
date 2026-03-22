<?php
include 'conexion.php'; // Aqui está la función que conecta a la BD
include 'mostrar.php'; // Aqui está la función que muestrar la tabla de usuarios
// Intento conectar a la BD Pruebas
$conexion = conectarBD();



// Crear Base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS Pruebas";
echo "BD Pruebas esta creada<br>";
// Crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS Usuarios (
    numero INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(50)
)";
echo "Tabla Usuarios esta creada<br>";
$conexion->query($sql);

// Insertar los usuarios
$conexion->query("INSERT INTO Usuarios (nombre, email) VALUES ('Alexander', 'alex@mail.com'), ('Jorge', 'jorgito@mail.com'), ('Luisma', 'comoluisma@mail.com')");
echo "3 usuarios insertados<br>";
mostrarUsuarios($conexion);

// Insertar un usuario nuevo
$conexion->query("INSERT INTO Usuarios (nombre, email) VALUES ('Prueba', 'prueba@mail.com')");
mostrarUsuarios($conexion);

// Modificar un usuario
$conexion->query("UPDATE Usuarios SET nombre = 'Prueba2', email = 'prueba2@gmail.com' WHERE nombre = 'Prueba'");
mostrarUsuarios($conexion);

// Borrar un usuario
$conexion->query("DELETE FROM Usuarios WHERE nombre = 'Prueba2'");
mostrarUsuarios($conexion);

$conexion->close();
?>

