<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;


    public function accept()
    {
        return $this->belongsTo(AcceptForm::class);
    }
}
