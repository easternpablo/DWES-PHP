<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Ofertas</title>
    </head>
    <body>
        <div class="row">
        <?php

            while($oferta = $todasOfertas->fetchObject()){ ?>
            
                <div class="col-lg-6">
                    <?php echo "Oferta: ".$oferta->titulo."<br> <img src='uploads/img/$oferta->imagen'/> <br>".$oferta->descripcion." <a href='index.php?c=Ofertas&&a=BorrarOferta&&idoferta=$oferta->id'>Eliminar<a/> | <a href='index.php?c=Ofertas&&a=NuevaOferta&&OfertaId=$oferta->id'>Editar</a><br><br>'"; ?>
                </div>
                     
      <?php } ?>
        </div>   
    </body>
</html>