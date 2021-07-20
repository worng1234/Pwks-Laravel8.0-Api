<?php

namespace App\Http\Controllers;

use App\Models\studentcoreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function joinstudentandbehavior(){
        $data = DB::table('student_information_core')
        ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
        ->select('student_information_core.id',
                 'student_information_core.student_id',
                 'student_information_core.prename',
                 'student_information_core.name',
                 'student_information_core.surname',
                 'behavior_student.title',
                 'behavior_student.behavior_date')
        ->get();
        return response()->json($data, 200);
    }

    public function joinstudentandbehaviorid($student_id){
        $data = DB::table('student_information_core')
        ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
        ->select('student_information_core.id',
                 'student_information_core.student_id',
                 'student_information_core.prename',
                 'student_information_core.name',
                 'student_information_core.surname',
                 'behavior_student.title',
                 'behavior_student.behavior_date')
        ->where('student_information_core.student_id',$student_id)
        ->get();
        return response()->json($data, 200);
    }
}
