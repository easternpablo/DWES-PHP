<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            
            $numero1 = $_POST['campoNum1'];
            $numero2 = $_POST['campoNum2'];
            $contador = $numero1+1;
            $impares = "";
            
            if($numero1 < $numero2){
                while(($contador < $numero2)){
                   if($contador % 2 == 0){
                       $contador++;
                   }else{
                       $impares = $impares." ".$contador;
                       $contador++;
                   }  
                }
                echo "<p>Los números impares que hay entre $numero1 y $numero2 son: $impares";
            }else{
                echo "<p>El primer número debe ser menor que el segundo...";
            }
        
        ?>
    </body>
</html>
