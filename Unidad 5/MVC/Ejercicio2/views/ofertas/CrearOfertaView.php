<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Registro Oferta</h1>
        <form action="index.php?c=Ofertas&&a=GuardarOferta" method="POST">
            <label>Oferta:</label>
            <input class="form-control" type="text" name="titulo" required/>
            <br>
            <label>Descripcion:</label>
            <textarea class="form-control" type="text" name="descripcion"></textarea>
            <br>
            <label>Imagen:</label>
            <input class="form-control" type="email" name="email" required/>
            <br>
            <input type="submit" name="submit" value="Registrarse"/>
        </form>
    </body>
</html>
