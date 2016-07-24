<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
	public function all_user_list()
	{
		$users = User::get();
		return $users;
	}

	public function suspend_user($user_id)
	{
		User::where('id',$user_id)->update(['status'=>0]);
	}

	public function login($input)
	{
		if(Auth::attempt($input)){
			if(Auth::user()->status==1){
				return true;
			}
			return false;
		}
		return false;
	}
}