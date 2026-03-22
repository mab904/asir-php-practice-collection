<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Alumno</title>
</head>
<body>
    <h2>Consultar Alumno</h2>
    <form method="post">
        ID: <input type="number" name="id"><br>
        <input type="submit" name="consultar" value="Consultar">
    </form>

    <?php
    if (isset($_POST['consultar'])) {
        $conexion = conectarBD();
        $sql = "SELECT * FROM alumnos WHERE id={$_POST['id']}";
        $resultado = mysqli_query($conexion, $sql);
        if ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID: {$fila['id']} | Nombre: {$fila['nombre']} | Edad: {$fila['edad']} | Email: {$fila['email']} | Curso: {$fila['curso']}<br>";
        } else {
            echo "No existe alumno con ese ID.";
        }
        mysqli_close($conexion);
    }
    ?>
    <br><a href="menu.php">Volver al menú</a>
</body>
</html>
