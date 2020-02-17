<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listado - Frutería DAW</title>
        <link rel="icon" href="img/frutero_enedina.jpg"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    </head>
    <body>
        <div class="container-fluid">
            @include('includes.header')
            <div class="row">
                <div class="container mt-1">
                    <h2>Listado de frutas</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        @foreach($frutas as $fruit)
                            <tbody>
                                <tr>
                                    <td>{{$fruit->id}}</td>
                                    <td>{{$fruit->name}}</td>
                                    <td>{{$fruit->description}}</td>
                                    <td>{{$fruit->precio}}€</td>
                                    <td>{{$fruit->fecha}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{action('FruteriaController@updateForm',['id'=>$fruit->id])}}">
                                                <button type="button" class="btn btn-success">Editar</button>
                                            </a>
                                            <a href="{{action('FruteriaController@delete',['id'=>$fruit->id])}}">
                                                <button type="button" class="btn btn-danger ml-1">Eliminar</button>
                                            </a>
                                            <a href="{{action('FruteriaController@verFruta',['id'=>$fruit->id])}}">
                                                <button type="button" class="btn btn-primary ml-1">Ver</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
