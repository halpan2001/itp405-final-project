<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
  public function users()
    {
    return $this->belongsToMany('App\User', 'user_commission', 'commission', 'user');
    //doesn't follow convention so you define join table name and key names
    }
}
