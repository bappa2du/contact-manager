<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
    protected $guarded = [];

    public function group()
    {
    	return $this->hasOne(Group::class,'id','group_id');
    }
}
