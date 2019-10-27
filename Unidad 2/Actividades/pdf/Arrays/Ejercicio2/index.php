<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $miArray = array();
            
            for($i = 1; $i <= 120; $i++){
                echo $miArray[$i] = rand(10,20)."<br>";
            }
        
        ?>
    </body>
</html>
