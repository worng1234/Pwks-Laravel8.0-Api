<?php

namespace App\Http\Controllers;

use App\Models\newstudentm4Model;
use Illuminate\Http\Request;

class newstudentm4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return newstudentm4Model::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newstudentm4 = newstudentm4Model::create($request->all());
        return response($newstudentm4, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return newstudentm4Model::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newstudentm4 = newstudentm4Model::find($id);
        $newstudentm4->update($request->all());
        return $newstudentm4;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $newstudentm4 = newstudentm4Model::find($id);
        $newstudentm4->delete();
        return response()->json(null, 204);
    }
}
