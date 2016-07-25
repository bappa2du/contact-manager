<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function get_index()
    {
    	$users = User::get();
    	return view('admin.user.index')
    		->with(compact('users'));
    }
}
