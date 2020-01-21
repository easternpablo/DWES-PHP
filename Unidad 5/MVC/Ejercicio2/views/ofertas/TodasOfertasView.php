<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Ofertas</title>
    </head>
    <body>
        <?php
            
            while($oferta = $todasOfertas->fetchObject()){
                echo $oferta->titulo." ".$oferta->descripcion." ".$oferta->imagen." <a href='index.php?c=Ofertas&&a=BorrarOferta&&idoferta=$oferta->id'>Eliminar<a/> | <a href='index.php?c=Ofertas&&a=EditarOferta&&idoferta=$oferta->id'>Editar</a><br>'";
            }
        
        ?>
    </body>
</html>
