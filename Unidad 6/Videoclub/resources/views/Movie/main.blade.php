@extends('layouts.master')
@section('titulo','Catálago')

@section('content')
    <div class="container">
        <div class="card" style="width:250px">
            <img class="card-img-top" src="{{$movies->poster}}" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">{{$movies->title}} Año: {{$movies->year}}</h4>
                <p class="card-text">{{$movies->synopsis}}</p>
                <a href="#" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>
@stop
