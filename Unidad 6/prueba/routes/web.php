<?php

# Principal
Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo";
});

Route::get('usuario/{nombre?}', function($nombre="Admin"){
    return "Usuario: " .$nombre;
});

Route::get('usuario2/{edad}', function($edad){
    return "Usuario edad: " .$edad;
})->where('edad','[0-9]+');

Route::get('usuario3/{nombre}/{edad}', function($nombre, $edad){
    return view('miVista',['nombre'=>$nombre,'edad'=>$edad]);
})->where(array('nombre'=>'[A-Za-z]+','edad'=>'[0-9]+'));

//Route::get('prueba/{nombre}/{edad}','PruebaController@index');

Route::get('nuevo/usuario','UsuarioController@index');

Route::post('usuario/mostrar','UsuarioController@recibir');
