<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasManyThrough('App\User', 'user_role', 'user_id', 'role_id', 'id', 'id');
    }

    public function groups()
    {
        return $this->hasManyThrough('App\Group', 'group_role', 'role_id', 'user_id', 'id', 'id');
    }
}
