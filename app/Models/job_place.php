<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_place extends Model
{
    protected $guarded = [];
  
  public function user() 
  { 
    return $this->morphOne('App\User', 'profile');
  }
}
