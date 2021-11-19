<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptForm extends Model
{
    use HasFactory;





    public function job_place()
    {
        return $this->belongsTo(Job_place::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


    public function timetable()
    {
        return $this->hasMany(TimeTable::class);
    }
}
