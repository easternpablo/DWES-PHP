<?php

Route::get('/','HomeController@index');
Auth::routes();

Route::group(['prefix'=>'catalog'], function () {

    Route::get('/','MovieController@index');

});


//Route::get('/home', )->name('home');
