<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>session1</title>
</head>
<body>

    <h1>Login de Usuario</h1>
    <!-- formulario que se envía -->
    <form action="session2.php" method="Post"> 
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <br><br>
	<input type="submit" value="Enviar">
    </form>

</body>
</html>


