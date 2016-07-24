<?php

namespace App\Models;

use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_role()
    {
        return $this->hasOne(UserRole::class,'user_id','id');
    }

    public function has_role($role_name)
    {
        if($this->user_role->role->role_name==$role_name){
            return true;
        }
        return false;
    }

    public function addRole($role_name)
    {
        $role_id = Role::where('role_name',$role_name)->first();
        UserRole::create(['user_id'=>$this->id,'role_id'=>$role_id->id]);
    }
}
