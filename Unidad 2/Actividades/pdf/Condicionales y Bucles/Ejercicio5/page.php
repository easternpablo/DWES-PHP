<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            
            $numero = $_POST['campoNumero'];
            $primerDigito = substr($numero, 0, 1);
            $ultimoDigito = substr($numero, -1);
            $mensaje = "";
            
            echo "<p>Número introducido: $numero </p>";
            
            if($primerDigito % 2 == 0){
                $mensaje = "Es par";
            }else{
                $mensaje = "Es impar";
            }
            
            echo "<p>Primer dígito: $primerDigito $mensaje </p>";
            
            if($ultimoDigito % 2 == 0){
                $mensaje = "Es par";
            }else{
                $mensaje = "Es impar";
            }
            
            echo "<p>Último dígito: $ultimoDigito $mensaje </p>";
            
        ?>
    </body>
</html>
