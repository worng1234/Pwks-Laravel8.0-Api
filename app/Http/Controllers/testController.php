<?php

namespace App\Http\Controllers;

use App\Models\test;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function store(Request $request){
        $data['name'] = $request['name'];
        $data['surname'] = $request['surname'];
        test::create($data);
      return response()->json([
          'message' => "Successfully created",
          'success' => true
      ], 200);
    }

    public function imageUp(Request $request){
        $post = new test();

        if($request->hasFile('image')){
            $completeFileName = $request->file('image')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly). '-'. rand(). '_'. time(). '.'. $ext;
            $path = $request->file('image')->storeAs('public/newstudentm1PIC', $compPic);
            $post->image = $compPic;
            $post->name = $request['name'];
        }
        if($post->save()){
            return response()->json([
                'message' => "Successfully created",
                'success' => true
            ], 200);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
    }
}
