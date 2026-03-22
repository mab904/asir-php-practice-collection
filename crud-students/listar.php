<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
</head>
<body>
    <h2>Listado de Alumnos</h2>
    <?php
    $conexion = conectarBD();
    $sql = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion, $sql);

    echo "<table border='1'>
            <tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Email</th><th>Curso</th></tr>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['edad']}</td>
                <td>{$fila['email']}</td>
                <td>{$fila['curso']}</td>
              </tr>";
    }
    echo "</table>";

    mysqli_close($conexion);
    ?>
    <br><a href="menu.php">Volver al menú</a>
</body>
</html>
