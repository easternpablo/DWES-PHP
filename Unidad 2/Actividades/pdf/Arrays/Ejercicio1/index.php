<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            
            require_once 'arrays.php';
            
            $arrayAleatorios = array();
            
            for($posicion = 0; $posicion < 8; $posicion++){
                $arrayAleatorios[$posicion] = rand(0,10);
            }
            
            echo "<p>Mostrar array.</p>";
            MostrarArray($arrayAleatorios);
            echo "<p>Mostrar el array sin el último elemento.</p>";
            QuitarUltimoElemento($arrayAleatorios);
            echo "<p>Ordenar los elementos del array.</p>";
            OrdenarArray($arrayAleatorios);
            echo "<p>Mostrar tamaño del array.</p>";
            MostrarTamañoArray($arrayAleatorios);
        ?>
    </body>
</html>
