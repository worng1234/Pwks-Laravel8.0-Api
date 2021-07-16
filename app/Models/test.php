<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = "student_information_core";
    protected $fillable = [
        'prename',
        'name',
        'surname',
        'student_id'
    ];
}
