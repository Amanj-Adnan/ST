<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,
        'college',
        'university',
        'department'

    ];



    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
