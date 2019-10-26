<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <?php
            
            function potencia($base, $exponente){
                $resultado = pow($base,$exponente);
                echo $resultado;
            }
            
            function numDigitos($numero){
                $tamaño = strlen($numero);
                echo $tamaño;
            }
            
            function voltearNum($numero){
                $numerostring = (string)$numero;
                $resultado = "";
                for($i = strlen($numero); $i >= 0; $i--){
                    $resultado .= $numerostring[$i];
                }
                echo $resultado;
            }
            
            function cogerTrozoNum($numero, $posInicial, $posFinal){
                $resultado = substr($numero, $posInicial, $posFinal);
                echo $resultado;
            }
        
        ?>
    </body>
</html>
