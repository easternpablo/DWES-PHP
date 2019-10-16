<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Datos Personales</title>
    </head>
    <body>
        <?php
            echo "<h1>Ejercicio 1</h1>";
            echo "<form action='page.php' method='POST'>";
            echo "  <input type='text' size='20' required name='campoNombre' placeholder='Introduce nombre...'> <br><br>";
            echo "  <input type='text' size='30' required name='campoApellidos' placeholder='Introduce apellidos...'> <br><br>";
            echo "  <input type='number' size='20' required name='campoEdad' placeholder='Introduce edad...'> <br><br>";
            echo "  <input type='text' size='40' required name='campoDireccion' placeholder='Introduce dirección...'> <br><br>";
            echo "  <input type='text' size='20' required name='campoTelefono' placeholder='Introduce telefono...'> <br><br>";
            echo "  <input type='submit' value='Enviar'> <br><br>";
            echo "<form>";
        ?>
    </body>
</html>
