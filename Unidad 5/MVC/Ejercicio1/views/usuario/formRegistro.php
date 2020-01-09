<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registro Usuario</title>
    </head>
    <body>
        <h1>Registrarse</h1>
        <?php Utils::mostrarError('register'); ?>
        <form action="index.php?c=Usuarios&a=save" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" required/>
            <label>Apellidos:</label>
            <input type="text" name="apellidos" required/>
            <label>Email:</label>
            <input type="email" name="email" required/>
            <label>Contraseña:</label>
            <input type="password" name="password" required/>
            <input type="submit" value="Registrarse"/>
        </form>
    </body>
</html>
