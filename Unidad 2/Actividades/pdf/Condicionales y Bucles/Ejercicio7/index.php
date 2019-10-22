<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla Multiplicar - 1 al 10</title>
    </head>
    <body>
        <?php
            
            echo "<table border='2px'>";
                echo "<tr>";
                    for($num = 1; $num <= 10; $num++){
                        echo "<th colspan='11'> Tabla $num </th>";
                        echo "<tr>";
                            for($multiplicando = 0; $multiplicando <= 10; $multiplicando++){
                                echo "<td> $num x $multiplicando = ".($num*$multiplicando)."</td>";                          
                            }
                        echo "</tr>";
                    }
                echo "</tr>";
            echo "</table>";
        
        ?>
    </body>
</html>
