<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\newstudentm1Model;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class newstudentm1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return newstudentm1Model::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new newstudentm1Model();

        if($request->hasFile('pic')){
            $completeFileName = $request->file('pic')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('pic')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly). '-'. rand(). '_'. time(). '.'. $ext;
            $path = $request->file('pic')->storeAs('public/newstudentm1PIC', $compPic);
            $post->pic = $compPic;
            $post->idNumber = $request['idNumber'];
            $post->name = $request['name'];
            $post->prename = $request['prename'];
            $post->surname = $request['surname'];
            $post->sex = $request['sex'];
            $post->birthday = $request['birthday'];
            $post->religion = $request['religion'];
            $post->nationality = $request['nationality'];
            $post->origin = $request['origin'];
            $post->disabled = $request['disabled'];
            $post->poorPerson = $request['poorPerson'];
            $post->etc = $request['etc'];
            $post->tel = $request['tel'];
            $post->email = $request['email'];
            $post->nameCen = $request['nameCen'];
            $post->fatherName = $request['fatherName'];
            $post->fatherNamecen = $request['fatherNamecen'];
            $post->fatherSurname = $request['fatherSurname'];
            $post->fatherId = $request['fatherId'];
            $post->fatherJob = $request['fatherJob'];
            $post->fatherTel = $request['fatherTel'];
            $post->motherName = $request['motherName'];
            $post->motherNamecen = $request['motherNamecen'];
            $post->motherSurname = $request['motherSurname'];
            $post->motherId = $request['motherId'];
            $post->motherJob = $request['motherJob'];
            $post->motherTel = $request['motherTel'];
            $post->parent = $request['parent'];
            $post->parentName = $request['parentName'];
            $post->parentNamecen = $request['parentNamecen'];
            $post->parentSurname = $request['parentSurname'];
            $post->parentId = $request['parentId'];
            $post->parentJob = $request['parentJob'];
            $post->parentTel = $request['parentTel'];
            $post->houseNumber = $request['houseNumber'];
            $post->street = $request['street'];
            $post->bloc = $request['bloc'];
            $post->road = $request['road'];
            $post->subDistrict = $request['subDistrict'];
            $post->district = $request['district'];
            $post->province = $request['province'];
            $post->post = $request['post'];
            $post->finalSchool = $request['finalSchool'];
            $post->finalSchoolSubDistrict = $request['finalSchoolSubDistrict'];
            $post->finalSchoolDistrict = $request['finalSchoolDistrict'];
            $post->finalSchoolProvince = $request['finalSchoolProvince'];
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


    public function up(Request $request){
        $post = new File();
        if($request->hasFile('image')){
            $completeFileName = $request->file('image')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly). '-'. rand(). '_'. time(). '.'. $ext;
            $path = $request->file('image')->storeAs('public/newstudentm1PIC', $compPic);
            $post->image = $compPic;
            $post->idNumber = $request['idNumber'];

        }
        if($post->save()){
            return ['status' => true, 'message' => 'Post Saved Successfully'];
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }

    }

    public function idnumber(Request $request){
        $data['idNumber'] = $request['idNumber'];
        File::created($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return newstudentm1Model::find($id);
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
        $newstudentm1 = newstudentm1Model::find($id);
        $newstudentm1->update($request->all());
        return $newstudentm1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $newstudentm1 = newstudentm1Model::find($id);
        $newstudentm1->delete();
        return response()->json(null, 204);
    }
}
