<?php

namespace App\Repository;

use App\Models\Contact;

class ContactRepository
{
	public function user_contacts($user_id)
	{
		$contacts = Contact::where('user_id')->get();
		return $contacts;
	}

	public function admin_contact()
	{
		$contacts = Contact::get();
		return $contacts;
	}

	public function save_contact($input)
	{
		$contact = new Contact();
		$contact->fill($input);
		$contact->save();
	}

	public function find_contact($id)
	{
		return Contact::find($id);
	}

	public function update_contact($id,$input)
	{
		Contact::where('id',$id)->update($input);
	}
}