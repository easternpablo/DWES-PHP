<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nota media</title>
    </head>
    <body>
        <?php
            
            echo "<h1>Ejercicio 3</h1>";
            echo "<form action='page.php' method='POST'>";
            echo "  <input type='number' required name='campoNota1' placeholder='Introduce nota...'> <br><br>";
            echo "  <input type='number' required name='campoNota2' placeholder='Introduce nota...'> <br><br>";
            echo "  <input type='number' required name='campoNota3' placeholder='Introduce nota...'> <br><br>";
            echo "  <input type='submit' value='Enviar'> <br><br>";
            echo "<form>";
            
        ?>
    </body>
</html>
