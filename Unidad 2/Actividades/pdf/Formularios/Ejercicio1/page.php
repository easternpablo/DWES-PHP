<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Recibir información</title>
    </head>
    <body>
        <?php
        
            $nombre = $_POST['campoNombre'];
            $apellidos = $_POST['campoApellidos'];
            $edad = $_POST['campoEdad'];
            $direccion = $_POST['campoDireccion'];
            $telefono = $_POST['campoTelefono'];
            
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellidos: $apellidos</p>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Dirección: $direccion</p>";
            echo "<p>Teléfono: $telefono</p>";
        ?>
    </body>
</html>
