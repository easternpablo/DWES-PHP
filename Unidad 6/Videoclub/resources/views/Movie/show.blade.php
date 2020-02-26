@extends("layouts.master")
@section("titulo","Detalle")

@section("content")
    <div class="row">
        <div class="col-sm-6 mt-2">
            @if($movie->rented == 1)
                <img src="{{$movie->poster}}" style="width:300px; opacity:0.3;"/>
            @else
                <img src="{{$movie->poster}}" style="width:300px;"/>
            @endif
        </div>
        <div class="col-sm-6 mt-2">
            <h2>Title: {{$movie->title}}</h2>
            <p>Director: {{$movie->director}}</p>
            <p>Year: {{$movie->year}}</p>
            <br>
            <p>Synopsis: {{$movie->synopsis}}</p>
            @if($movie->rented == 1)
                <p style="color:red; font-weight:bold;">Alquilada</p>
                <a href="{{action("MovieController@changeRentedFalse",['id'=>$movie->id])}}" style="text-decoration:none;">
                    <button type="button" class="btn btn-danger">Devolver película</button>
                </a>
            @else
                <p style="color:green; font-weight:bold;">Disponible</p>
                <a href="{{action("MovieController@changeRentedTrue",['id'=>$movie->id])}}" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary">Alquilar película</button>
                </a>
            @endif
            <a href="{{action("MovieController@edit",['id'=>$movie->id])}}" style="text-decoration:none;">
                <button type="button" class="btn btn-warning">Editar película</button>
            </a>
            <a href="{{action("MovieController@showMovies")}}">
                <button type="button" class="btn btn-secondary">
                    <i class="fas fa-angle-left"></i>Volver al listado
                </button>
            </a>
        </div>
    </div>
@stop
