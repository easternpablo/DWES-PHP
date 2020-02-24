<?php

Route::get('/','HomeController@index');

Auth::routes();

Route::group(['prefix'=>'catalog'], function () {

    Route::get('/','MovieController@showMovies');

    Route::get('/create','MovieController@create');

    Route::post('/create/submit','MovieController@save');

    Route::get('/show/{id}','MovieController@showMovieId')->where('id','[0-9]+');

    Route::get('/edit/{id}','MovieController@edit')->where('id','[0-9]+');

    Route::post('/edit/submit/{id}','MovieController@update')->where('id','[0-9]+');

    Route::get('/delete/{id}','MovieController@remove')->where('id','[0-9]+');

});
