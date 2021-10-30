<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'start_date',
        'end_date'

    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
