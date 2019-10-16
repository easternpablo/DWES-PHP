<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Suma, Resta, Multiplicación y División</title>
    </head>
    <body>
        <?php
            echo "<h1>Ejercicio 2</h1>";
            echo "<form action='page.php' method='POST'>";
            echo "  <input type='number' size='20' required name='campoNumero1' placeholder='Introduce un número...'> <br><br>";
            echo "  <input type='number' size='20' required name='campoNumero2' placeholder='Introduce otro número...'> <br><br>";
            echo "  <input type='submit' value='Enviar'> <br><br>";
            echo "<form>";
        ?>
    </body>
</html>
