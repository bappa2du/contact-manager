<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
	public function all_user_list()
	{
		$users = User::get();
		return $users;
	}
}