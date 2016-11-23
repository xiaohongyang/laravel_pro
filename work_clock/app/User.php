<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //
    use Authenticatable;


    protected $table = 'users';

    public function posts(){
        return $this->hasMany( '\App\Post');
    }

}
