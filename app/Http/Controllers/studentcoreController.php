<?php

namespace App\Http\Controllers;

use App\Models\studentcoreModel;
use Illuminate\Http\Request;

class studentcoreController extends Controller
{
    public function getAll(){
       return studentcoreModel::all();
    }

    public function getID($id){
        return studentcoreModel::find($id);
    }
}
