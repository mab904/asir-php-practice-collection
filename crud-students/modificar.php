<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Alumno</title>
</head>
<body>
    <h2>Modificar Alumno</h2>
    <form method="post">
        ID: <input type="number" name="id"><br>
        Nuevo Nombre: <input type="text" name="nombre"><br>
        Nueva Edad: <input type="number" name="edad"><br>
        Nuevo Email: <input type="email" name="email"><br>
        Nuevo Curso: <input type="text" name="curso"><br>
        <input type="submit" name="modificar" value="Modificar">
    </form>

    <?php
    if (isset($_POST['modificar'])) {
        $conexion = conectarBD();
        $sql = "UPDATE alumnos SET 
                nombre='{$_POST['nombre']}', 
                edad={$_POST['edad']}, 
                email='{$_POST['email']}', 
                curso='{$_POST['curso']}'
                WHERE id={$_POST['id']}";
	$resultado=mysqli_query($conexion, $sql);
	if (!$resultado) {
          echo "Error al modificar: " . mysqli_error($conexion);
        }
	else{
	     $filas = mysqli_affected_rows($conexion);
             if ($filas > 0) {
                  echo "Alumno modificado.";
              } else {
                  echo "No existe alumno con ese ID (no se modificó nada).";
              }
	}

        mysqli_close($conexion);
    }
    ?>
    <br><a href="menu.php">Volver al menú</a>
</body>
</html>
