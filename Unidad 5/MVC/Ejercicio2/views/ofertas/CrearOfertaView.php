<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inserción oferta</title>
    </head>
    <body>
        <h1 class="ml-4">Registro Oferta</h1>
        <form class="ml-4 mr-4" action="index.php?c=Ofertas&&a=NuevaOferta" method="POST" enctype="multipart/form-data">
            <label>Oferta:</label>
            <input class="form-control" type="text" name="titulo" required/>
            <br>
            <label>Descripcion:</label>
            <textarea class="form-control" type="text" name="descripcion" required></textarea>
            <br>
            <label>Imagen:</label>
            <input class="form-control" type="file" name="imagen"/>
            <br>
            <input class="btn btn-success" type="submit" name="submit" value="Guardar"/>
        </form>
    </body>
</html>
