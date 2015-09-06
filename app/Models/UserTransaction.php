<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}