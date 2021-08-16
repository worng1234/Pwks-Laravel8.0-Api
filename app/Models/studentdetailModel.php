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
        'gadject',
        'internet',
        'disebled',
        'unfortuned',
        'lack',
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
        'problem',
        'help',
    ];
}
