<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Recibir información</title>
    </head>
    <body>
        <?php
        
            $pesetas = $_POST['campoPesetas'];
            $euros = $pesetas/166.386;       
            echo "<p>Sabiendo que 1€ son 166.386pts --> $pesetas son: $euros €.</p>";
        ?>
    </body>
</html>
