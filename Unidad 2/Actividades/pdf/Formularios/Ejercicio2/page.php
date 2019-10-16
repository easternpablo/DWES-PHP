<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Recibir información</title>
    </head>
    <body>
        <?php
        
            $numero1 = $_POST['campoNumero1'];
            $numero2 = $_POST['campoNumero2'];
            $suma = $numero1+$numero2;
            $resta = $numero1-$numero2;
            $multiplicacion = $numero1*$numero2;
            $division = $numero1/$numero2;
            
            echo "<p>Números introducido: $numero1 y $numero2.</p>";
            echo "<p>Suma: $suma</p>";
            echo "<p>Resta: $resta</p>";
            echo "<p>Multiplicación: $multiplicacion</p>";
            echo "<p>División: $division</p>";
        ?>
    </body>
</html>
