<?php

Route::get('/','HomeController@index');

Auth::routes();

Route::group(['prefix'=>'catalog'], function () {

    Route::get('/','MovieController@showMovies');

    Route::get('/create','MovieController@create');

    Route::post('/create/submit','MovieController@save');

});
