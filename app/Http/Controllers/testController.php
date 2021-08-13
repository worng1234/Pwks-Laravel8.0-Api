<?php

namespace App\Http\Controllers;

use App\Models\test;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function store(Request $request){
        $data = test::create($request->all());
        return response($data, 201);
    }
}
