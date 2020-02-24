@extends("layouts.master")
@section("titulo","Editar")

@section("content")
    <div class="container">
        <h2>Editar Película</h2>
        <form action="{{action('MovieController@update',['id'=>$movie->id])}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$movie->title}}">
            </div>
            <div class="form-group">
                <label>Año:</label>
                <input type="text" class="form-control" id="annio" name="annio" value="{{$movie->year}}">
            </div>
            <div class="form-group">
                <label>Director:</label>
                <input type="text" class="form-control" id="director" name="director" value="{{$movie->director}}">
            </div>
            <div class="form-group">
                <label>Ruta Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen" value="{{$movie->poster}}">
                <img src="{{$movie->poster}}" class="mt-1" style="width:150px"/>
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea class="form-control" rows="3" type="text" id="sinopsis" name="sinopsis">{{$movie->synopsis}}</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@stop
