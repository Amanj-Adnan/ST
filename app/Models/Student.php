<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'supervisor_id',
        'name' ,
        'college',
        'university',
        'department'

    ];

    public function request()
    {
        return $this->hasMany(RequestForm::class);
    }


    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function accept()
    {
        return $this->hasMany(AcceptForm::class);
    }
}
