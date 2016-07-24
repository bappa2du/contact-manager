<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function get_login()
    {
    	return view('auth.login');
    }

    public function post_login(Request $request)
    {
    	$input = $request->except('_token');
    	if(Auth::attempt($input)){
    		
    	}
    	return redirect()->back()
    		->with('error','Login Failed');
    }

    public function get_logout()
    {
    	Auth::logout();
    }
}
