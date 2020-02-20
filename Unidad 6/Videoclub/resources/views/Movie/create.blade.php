@extends('layouts.master')
@section('titulo','Nueva Película')

@section('content')
    <div class="container">
        <h2>Nueva Película</h2>
        <form action="{{action('MovieController@save')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="form-group">
                <label>Año:</label>
                <input type="text" class="form-control" id="annio" name="annio">
            </div>
            <div class="form-group">
                <label>Director:</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="form-group">
                <label>Ruta Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea class="form-control" rows="3" type="text" id="sinopsis" name="sinopsis"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Añadir</button>
        </form>
    </div>
@stop
