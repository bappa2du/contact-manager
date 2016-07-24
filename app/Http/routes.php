<?php



Route::group(['prefix'=>'user'],function(){

});

Route::group(['prefix'=>'super-admin'],function(){

});

Route::controller('auth','AuthController');

Route::get('/', 'Web\HomeController@index');
