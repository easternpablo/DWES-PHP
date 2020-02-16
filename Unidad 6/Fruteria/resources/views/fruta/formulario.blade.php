<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agregar - Frutería DAW</title>
        <link rel="icon" href="img/frutero_enedina.jpg"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            @include('includes.header')
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form class="mt-2" action="{{action('FruteriaController@save')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Introduzca nombre" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" rows="3" type="text" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" step="0.01" placeholder="Introduzca precio" id="precio" name="precio">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Añadir</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
