<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $timestamps = false;
    protected $table = 'user_roles';

    function users(){
        $this->hasMany('User', 'role_id', 'id');
    }
}
