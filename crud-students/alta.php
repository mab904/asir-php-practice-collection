<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Alumno</title>
</head>
<body>
    <h2>Alta de Alumno</h2>
    <form method="post">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="number" name="edad"><br>
        Email: <input type="email" name="email"><br>
        Curso: <input type="text" name="curso"><br>
        <input type="submit" name="insertar" value="Insertar">
    </form>

    <?php
    //if (isset($_POST['insertar'])) {
        $conexion = conectarBD();
        $sql = "INSERT INTO alumnos (nombre, edad, email, curso) 
                VALUES ('{$_POST['nombre']}', {$_POST['edad']}, '{$_POST['email']}', '{$_POST['curso']}')";
        if (mysqli_query($conexion, $sql)) {
            echo "Alumno insertado correctamente.";
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
  // }
    ?>
    <br><a href="menu.php">Volver al menú</a>
</body>
</html>
