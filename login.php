<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="comprobarLogin4.php" method="POST">
        <label for="nombre">Nombre*: </label>
        <input name="nombre" type="text" placeholder="Escribe tu nombre..." required>

        <label for="password">Contraseña*: </label>
        <input name="password" type="password" placeholder="Escribe tu contraseña" required>

        <!-- Pedir al usuario su edad -->
         <label for="edad">Edad*</label>
         <input type="number" name="edad" placeholder="Escribe tu edad" required>

        <button type="submit">Enviar</button>
        <p>Los campos con asterisco son obligatorios</p>
    </form>
</body>
</html>