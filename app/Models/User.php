<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;

    public function userEvents()
    {
        return $this->hasMany('App\Models\UserEvent');
    }

    public function userTransactions()
    {
        return $this->hasMany('App\Models\UserTransaction');
    }
}