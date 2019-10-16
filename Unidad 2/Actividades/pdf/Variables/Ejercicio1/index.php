<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
            echo "<h1>Datos Personales </h1>";
        
            $nombre = "Pablo";
            $apellidos = "Vilches Mira";
            $direccion = "C/Maestro Portela, nº17 2ºC";
            $edad = 23;
            $telefono = "626385324";
            
            echo "<p style='color: red;'>Nombre: <a style='color: black;'>$nombre<a> </p>";
            echo "<p style='color: red;'>Apellidos: <a style='color: black;'>$apellidos</a> </p>";
            echo "<p style='color: red;'>Dirección: <a style='color: black;'>$direccion</a> </p>";
            echo "<p style='color: red;'>Edad: <a style='color: black;'>$edad</a> </p>";
            echo "<p style='color: red;'>Teléfono: <a style='color: black;'>$telefono</a> </p>";
        ?>
    </body>
</html>
