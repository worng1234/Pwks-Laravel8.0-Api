<?php

namespace App\Http\Controllers;

use App\Models\newstudentm1Model;
use Illuminate\Http\Request;

class  newstudentController extends Controller
{
    public function getAll(){
        $data = newstudentm1Model::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['name'] = $request['name'];
        $data['surname'] = $request['surname'];
        newstudentm1Model::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 201);
      }

      public function store(Request $request)
    {
        $test = newstudentm1Model::create($request->all());
        return response($test, 201);
    }
}
