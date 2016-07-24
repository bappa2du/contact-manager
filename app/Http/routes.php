<?php

use App\Models\User;



Route::group(['prefix'=>'user'],function(){

});

Route::group(['prefix'=>'super-admin'],function(){

});

Route::controller('auth','AuthController');

Route::get('/', 'Web\HomeController@index');

Route::get('admin',function(){
	// dd(database_path());
	User::create([
		'email'=>'demo@demo.com',
		'name'=>'Admin',
		'mobile'=>'8801670752214',
		'password'=>bcrypt('demo'),
		'status'=>1,
		]);
	return 'done';
});
