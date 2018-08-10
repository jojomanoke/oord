<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user(){
        $this->hasOne('User', 'id', 'user_id');
    }
}
