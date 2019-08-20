<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function roles()
    {
        return $this->hasManyThrough('App\Role', 'group_role', 'group_id', 'role_id', 'id', 'id');        
    }

    public function users()
    {
        return $this->hasManyThrough('App\User', 'user_group', 'group_id', 'user_id', 'id', 'id');        
    }
}
