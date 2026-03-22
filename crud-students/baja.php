<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja de Alumno</title>
</head>
<body>
    <h2>Baja de Alumno</h2>
    <form method="post">
        ID del alumno a eliminar: <input type="number" name="id"><br>
        <input type="submit" name="borrar" value="Eliminar">
    </form>

    <?php
    if (isset($_POST['borrar'])) {
        $conexion = conectarBD();
        $sql = "DELETE FROM alumnos WHERE id={$_POST['id']}";
        $resultado=mysqli_query($conexion, $sql);
        if (!$resultado) {
          echo "Error al eliminar: " . mysqli_error($conexion);
        }
	else{
	     $filas = mysqli_affected_rows($conexion);
             if ($filas > 0) {
                  echo "Alumno eliminado.";
              } else {
                  echo "No existe alumno con ese ID (no se eliminó nada).";
              }
	}
        mysqli_close($conexion);
    }
    ?>
    <br><a href="menu.php">Volver al menú</a>
</body>
</html>
