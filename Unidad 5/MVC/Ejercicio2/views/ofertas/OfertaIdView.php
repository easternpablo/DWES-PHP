<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Búsqueda oferta</title>
    </head>
    <body>
        <?php
        
            while($oferta = $ofertaId->fetchObject()){
                echo "**".$oferta->titulo."  ".$oferta->descripcion."  ".$oferta->imagen;
            }
        
        ?>
    </body>
</html>
