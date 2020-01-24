<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Ofertas</title>
    </head>
    <body>
        <?php
            
            while($oferta = $todasOfertas->fetchObject()){
                echo "Oferta: ".$oferta->titulo."<br> <img src='uploads/img/$oferta->imagen'/> <br>".$oferta->descripcion."<br> <a href='index.php?c=Ofertas&&a=BorrarOferta&&idoferta=$oferta->id'>Eliminar<a/> | <a href='index.php?c=Ofertas&&a=NuevaOferta&&OfertaId=$oferta->id'>Editar</a><br><br>'";
            }
        
        ?>
    </body>
</html>