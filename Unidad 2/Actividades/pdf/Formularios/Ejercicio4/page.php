<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Recibir información</title>
    </head>
    <body>
        <?php
            
            const pi = 3.14;
            $radio = $_POST['campoRadio'];
            
            $area = pi*($radio*2);
            $longitud = 2*pi*$radio;
            
            echo "<p>Area: $area Longitud: $longitud</p>";
            
        ?>
    </body>
</html>
