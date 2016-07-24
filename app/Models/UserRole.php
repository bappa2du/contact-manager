<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded = [];
    protected $table = 'user_role';

    public function role()
    {
    	return $this->hasOne(Role::class,'id','role_id');
    }
}
