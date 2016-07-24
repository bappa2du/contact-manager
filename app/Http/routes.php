<?php

use App\Models\Role;
use App\Models\User;



Route::group(['prefix'=>'user'],function(){
	Route::controller('dashboard','User\UserController');
});

Route::group(['prefix'=>'super-admin'],function(){
	Route::controller('dashboard','Admin\DashboardController');
});

Route::controller('auth','AuthController');

Route::get('logout',function(){
	Auth::logout();
	return redirect('/');
});
Route::get('/', 'Web\HomeController@index');

Route::get('admin',function(){
	// dd(database_path());
	User::create([
		'email'=>'admin@demo.com',
		'name'=>'Super Admin',
		'mobile'=>'8801670752212',
		'password'=>bcrypt('demo'),
		'status'=>1,
		]);
	Role::create(['role_name'=>'admin']);
	// dd(Role::get());
	$user = User::where('email','admin@demo.com')->first();
	$user->addRole('admin');
	return User::with('user_role.role')->get();
});
