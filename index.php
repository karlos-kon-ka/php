<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP Básico</title>
</head>
<body>

    <h1>Inicio de Sesión</h1>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Verificar si el usuario y la contraseña son válidos (simplificado)
        $usuariosValidos = array(
            "usuario1" => "contrasena1",
            "usuario2" => "contrasena2"
        );

        if (isset($usuariosValidos[$usuario]) && $usuariosValidos[$usuario] == $contrasena) {
            echo "<p>Bienvenido, $usuario</p>";
        } else {
            echo "<p>Usuario o contraseña incorrectos</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>

</body>
</html>
