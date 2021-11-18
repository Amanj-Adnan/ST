<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_place extends Model
{

    protected $fillable = [
        'name' => 'user->name',
        'email' => 'user->email',
        'type',
        'place',


    ];
    protected $guarded = [];

  public function user()
  {
    return $this->morphOne(User::class, 'profile');
  }


    public function request()
    {
        return $this->hasMany(RequestForm::class);
    }

    public function accept()
    {
        return $this->hasMany(AcceptForm::class);
    }
}
