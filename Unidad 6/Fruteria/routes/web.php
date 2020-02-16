<?php

Route::get('/','FruteriaController@index');

Route::group(['prefix'=>'fruta'], function () {

    Route::get('agregar','FruteriaController@createForm');
    Route::post('agregar/submit','FruteriaController@save');

    Route::get('editar/{id}','FruteriaController@updateForm')->where('id','[0-9]+');
    Route::post('editar/submit/{id}','FruteriaController@update')->where('id','[0-9]+');

    Route::get('borrar/{id}','FruteriaController@delete')->where('id','[0-9]+');

    Route::get('detalle/{id}','FruteriaController@verFruta')->where('id','[0-9]+');

    Route::get('listado','FruteriaController@listarFrutas');
});
