<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentdetailModel extends Model
{
    protected $table = "student_detail";
    protected $fillable = [
        'go_school',
        'distance',
        'long_distance',
        'gadject1',
        'gadject2',
        'gadject3',
        'gadject4',
        'internet1',
        'internet2',
        'disebled',
        'unfortuned',
        'lack1',
        'lack2',
        'lack3',
        'lack4',
        'lack5',
        'friend_drug',
        'sell_drug',
        'sexual',
        'not_parent',
        'dark_travel',
        'sexual_harrasment',
        'cute_world',
        'rich_man',
        'good_guy',
        'social_good',
        'problem1',
        'problem2',
        'problem3',
        'problem4',
        'problem5',
        'problem6',
        'problem7',
        'problem8',
        'problem9',
        'problem10',
        'help1',
        'help2',
        'help3',
        'help4',
        'help5',
        'help6'
    ];
}
