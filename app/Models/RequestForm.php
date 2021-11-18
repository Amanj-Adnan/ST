<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'job_place_id',
        'serial_no',
        'start_date',
        'end_date'

    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function job_place()
    {
        return $this->belongsTo(Job_place::class);
    }
}
