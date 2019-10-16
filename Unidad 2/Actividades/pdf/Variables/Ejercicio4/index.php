<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
            echo "<h1> Area y Longitud </h1>";
            
            const pi = 3.14;
            $radio = 12;            
            $area = pi*($radio*2);
            $longitud = 2*pi*$radio;
            
            echo "<p> Area: (pi x r^2) Longitud: 2 x pi x r | radio: $radio</p>";
            echo "<p> Area: $area </p>";
            echo "<p> Longitud: $longitud </p>";
        ?>
    </body>
</html>