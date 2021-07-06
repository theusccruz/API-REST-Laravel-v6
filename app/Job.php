<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = ['title', 'description', 'local', 'remote', 'type', 'user_id'];
  protected $dates = ['deleted_at'];

  function user() {
    return $this->belongsTo('App\User');
  }
}
