<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Caja Fuerte</title>
    </head>
    <body>
        <?php
            
            $numeroPensado = rand(1,9999);        
            if(!isset($_POST['campoNumSecreto'])){               
                $numIntroducido = 0;
            }else{
                $numIntroducido = $_POST['campoNumSecreto'];
                if($numIntroducido == $numeroPensado){
                    echo "<h1>Enhorabuena has acertado el número!!!</h1>";
                }elseif($numIntroducido != $numeroPensado){
                    echo "<h1>Ese no es el número sigue intentándolo</h1>";
                }
            }
            
            require_once 'index.php';
        
        ?>
    </body>
</html>
