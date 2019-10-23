<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Arrays funciones</title>
    </head>
    <body>
        <?php
            
            function MostrarArray($array){
                foreach ($array as $num){
                    echo $num." ";
                }
            }
            
            function QuitarUltimoElemento($array){
                $ultimaPosicion = count($array)-1;
                for($i = 0; $i < $ultimaPosicion; $i++){
                    echo $array[$i]." ";
                }
            }
            
            function OrdenarArray($array){
                sort($array);
                foreach($array as $clave => $num){
                    echo $num."\n";
                }
            }
            
            function MostrarTamañoArray($array){
                $contador = 0;
                foreach ($array as $num){
                    $contador++;
                }
                
                echo "Tamaño: ".$contador;
            }
        
        ?>
    </body>
</html>
