<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function contact_group()
    {
    	return $this->belongsToMany(ContactGroup::class,'contact_id','id');
    }
}
