<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
            echo "<h1> Suma, Resta, Multiplicación y División </h1>";
        
            $x = 144;
            $y = 999;
            $suma = ($x+$y);
            $resta = ($x-$y);
            $multiplicacion = ($x*$y);
            $division = ($x/$y);
            
            echo "<p>Números: <a>$x<a> y <a>$y</a> </p>";
            echo "<p>Suma: <a>$suma</a> </p>";
            echo "<p>Resta: <a>$resta</a> </p>";
            echo "<p>Multiplicación: <a>$multiplicacion</a> </p>";
            echo "<p>División: <a>$division</a> </p>";
        ?>
    </body>
</html>