@extends('layouts.master')
@section('titulo','Catálago')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mt-2" style="width:250px">
                        <img class="card-img-top" src="{{$movie->poster}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{$movie->title}}</h4>
                            <h4 class="card-title">Año: {{$movie->year}}</h4>
                            <p class="card-text">{{$movie->synopsis}}</p>
                            <a href="{{action('MovieController@showMovieId',['id'=>$movie->id])}}" class="btn btn-primary">Ver</a>
                            <a href="{{action('MovieController@remove',['id'=>$movie->id])}}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
