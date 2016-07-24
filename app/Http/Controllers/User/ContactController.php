<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get_index()
    {
    	$contacts = Contact::get();
    	return view('user.contact.index')
    		->with('contacts');
    }
}
