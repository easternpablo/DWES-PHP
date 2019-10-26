<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca de matemáticas</title>
    </head>
    <body>
        <?php
            
            require_once 'biblioteca.php';
            
            $base = 10;
            $exponente = 2;            
            echo "<p>Nº4: Potencia base $base exponente $exponente</p>";
            potencia($base, $exponente);
            
            $numero = 12345;
            echo "<p>Nº5: Dígitos $numero</p>";
            numDigitos($numero);
            
            $numero1 = 31689;
            echo "<p>Nº6: Voltea $numero1</p>";
            voltearNum($numero1);
            
            $numero2 = 523589;
            $posicionInicial = 2;
            $posicionFinal = 3;
            echo "<p>Nº13: Trozo de número $numero2 posicion inicial $posicionInicial posicion final $posicionFinal</p>";
            cogerTrozoNum($numero2, $posicionInicial, $posicionFinal);
            
        ?>
    </body>
</html>
