<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detalle - Frutería DAW</title>
        <link rel="icon" href="{{url('img/frutero_enedina.jpg')}}"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    </head>
    <body>
        <div class="container-fluid">
            @include('includes.header')
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="container mt-2">
                        <div class="jumbotron">
                          <h1>{{$fruta->name}}</h1>
                          <p>{{$fruta->description}}</p>
                          <p>{{$fruta->precio}}€</p>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        @include('includes.footer')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
