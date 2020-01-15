<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Notas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Nueva Nota</h1>
        <form action="index.php?c=Notas&&a=save" method="POST">
            <label>Usuario(ID):</label>
            <input class="form-control" type="number" name="usuarioid" required/>
            <br>
            <label>Titulo:</label>
            <input class="form-control" type="text" name="titulo" required/>
            <br>
            <label>Descripcion:</label>
            <input class="form-control" type="text" name="descripcion" required/>
            <br>
            <input type="submit" name="submit" value="Crear"/>
        </form>
    </body>
</html>
