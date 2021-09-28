<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class newstudentm1Model extends Model
{
    use HasFactory;
    protected $table = "new_student_register_m1";
    protected $fillable = [
        'prename',
        'name',
        'nameCen',
        'surname',
        'sex',
        'pic',
        'id_number_pic',
        'house_pic',
        'idNumber',
        'day',
        'mounth',
        'year',
        'religion',
        'nationality',
        'origin',
        'disabled',
        'poorPerson',
        'etc',
        'tel',
        'email',
        'fatherName',
        'fatherNamecen',
        'fatherSurname',
        'fatherId',
        'fatherJob',
        'fatherTel',
        'motherName',
        'motherNamecen',
        'motherSurname',
        'motherJob',
        'motherId',
        'motherTel',
        'parent',
        'parentName',
        'parentNamecen',
        'parentSurname',
        'parentId',
        'parentJob',
        'parentTel',
        'houseNumber',
        'street',
        'road',
        'bloc',
        'subDistrict',
        'district',
        'province',
        'post',
        'finalSchool',
        'finalSchoolSubDistrict',
        'finalSchoolDistrict',
        'finalSchoolProvince'
    ];
}
