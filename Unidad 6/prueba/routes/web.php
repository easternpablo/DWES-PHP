<?php

# Principal
Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo";
});

Route::get('usuario/{nombre?}',function($nombre="Admin"){
    return "Usuario: " .$nombre;
});
