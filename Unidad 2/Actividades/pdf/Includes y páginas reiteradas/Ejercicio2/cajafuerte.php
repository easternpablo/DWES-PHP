<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Caja Fuerte</title>
    </head>
    <body>
        <?php
            
            $numeroPensado = 5;
            $intentos = 4;
            if(!isset($_POST['campoNumSecreto'])){               
                $numIntroducido = 0;
            }else{
                $numIntroducido = $_POST['campoNumSecreto'];
                if($numIntroducido == $numeroPensado){
                    echo "<h1>La caja fuerte se ha abierto satisfactoriamente!!!</h1>";
                }elseif($intentos == 0){
                    echo "<h1>No tienes más intentos</h1>";
                }else{
                    $intentos--;
                }
            }
            
            require_once 'index.php';
        
        ?>
    </body>
</html>
