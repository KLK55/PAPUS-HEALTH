<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <main>
        <h2>Iniciar sesión como administrador</h2>
        <form method="post" action="procesar_login.php">
            <label for="nombre">Nombre de Usuario:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" required>
            <br>
            <input type="submit" value="Iniciar sesión">
        </form>
    </main>
</body>
</html>
