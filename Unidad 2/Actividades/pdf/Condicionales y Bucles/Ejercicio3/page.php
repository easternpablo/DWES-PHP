<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            
            $nota1 = $_POST['campoNota1'];
            $nota2 = $_POST['campoNota2'];
            $nota3 = $_POST['campoNota3'];
            $mensaje = "";
            $notaMedia = round(($nota1+$nota2+$nota3)/3);
            
            switch ($notaMedia){
                case 1:
                case 2:
                case 3:
                case 4:
                    $mensaje = "Insuficiente";
                    break;
                case 5:
                case 6:
                    $mensaje = "Suficiente";
                    break;
                case 7:
                case 8:
                    $mensaje = "Notable";
                    break;
                case 9:
                case 10:
                    $mensaje = "Sobresaliente";
                    break;
            }
            
            echo "<p> Notas introducidas: $nota1, $nota2 y $nota3 la media de todas las notas $notaMedia un $mensaje";
        
        ?>
    </body>
</html>
