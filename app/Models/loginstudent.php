<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class loginstudent extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "loginstudent";
    protected $fillable = [
        'student_id',
        'student_id_card',
        'name',
        'surname',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

}
