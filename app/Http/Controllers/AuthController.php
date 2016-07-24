<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function get_login()
    {
    	return view('auth.login');
    }

    public function post_login(Request $request)
    {
    	$input = $request->except('_token');
    	if($this->userRepo->login($input)){
    		return $this->user_home();
    	}
    	return redirect()->back()
    		->with('error','Login Failed');
    }

    public function user_home()
    {
        
    }

    public function get_logout()
    {
    	Auth::logout();
    }
}
