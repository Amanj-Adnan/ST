<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' => 'user->name',
        'email' => 'user->email',
        'college',
        'university',
        'department'

    ];
     protected $guarded = [];

  public function user()
  {
    return $this->morphOne(User::class, 'profile');
  }


    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
