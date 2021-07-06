<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = ['name', 'email', 'website', 'logo', 'password'];
  protected $hidden = ['password'];
  protected $dates = ['deleted_at'];

  public function jobs() {
    return $this->hasMany('App\Job');
  }

}
