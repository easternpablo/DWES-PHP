<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Media</title>
    </head>
    <body>
        <?php
            
            require_once 'index.php';
            
            $numero = $_POST['campoNumero'];
            $suma = 0;
            $contador = 0;
            
            while($numero != -1){
                $suma += $numero;
                $contador++;
            }
            
            echo "<p>La media de todos los números es: ".$suma/$contador."</p>";
            
        ?>
    </body>
</html>
