<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healtystudentModel extends Model
{
    protected $table = "healty_student";
    protected $fillable = [
        'weight',
        'height',
        'disease',
        'medicine_lose',
        'medicine',
        'remedy',
        'sight_eye1',
        'sight_eye2',
        'sight_eye3',
        'sight_eye4',
        'sight_eye5',
        'sight_eye6',
        'glasses',
        'danger',
        'unsound',
        'defective',

    ];
}
