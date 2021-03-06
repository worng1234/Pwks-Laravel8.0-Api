<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentcoreModel extends Model
{
    use HasFactory;
    protected $table = "student_information_core";
    protected $fillable = [
        'student_id',
        'student_id_card',
        'prename',
        'name',
        'surname',
        'name_cen',
        'religion',
        'nationality',
        'origin',
        'house_number',
        'bloc',
        'street',
        'road',
        'sub_district',
        'district',
        'province',
        'post',
        'disabled',
        'poor_person',
        'etc',
        'sex',
        'status',
        'classroom_id',
        'birthday',
        'tel',
        'score',
        'email',
        'blood_group',
        'talent',
        'distance_school',
        'go_school',
        'no_son',
        'no_brother',
        'no_job',
        'no_parent',
        'status_parent',
        'total_parent',
        'student_job',
        'student_job_name',
        'student_job_total',
        'father_name',
        'father_namecen',
        'father_surname',
        'father_age',
        'father_tel',
        'father_job',
        'mother_name',
        'mother_namecen',
        'mother_surname',
        'mother_age',
        'mother_tel',
        'mother_job',
        'parent_name',
        'parent_namecen',
        'parent_surname',
        'parent_age',
        'parent_job',
        'parent_tel',
    ];
}
