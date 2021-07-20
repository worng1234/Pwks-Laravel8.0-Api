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
        $student =  studentcoreModel::find($id);
        if(is_null($student)){
            return response()->json(['message' => 'Student Not found'], 404);
        }
        return response()->json($student::find($id), 200);
    }

    public function update(Request $request, $id){
        $studentcore = studentcoreModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }
}
