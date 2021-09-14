<?php

namespace App\Http\Controllers;

use App\Models\loginstudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function getUser(){
        return User::all();
    }

    public function register(Request $request){
        return User::create([
            'student_id' => $request->input(key:'student_id'),
            'student_id_card' => $request->input(key:'student_id_card'),
            'name' => $request->input(key:'name'),
            'surname' => $request->input(key:'surname'),
            'email' => $request->input(key:'email'),
            'password' => Hash::make($request->input(key:'password')),
        ]);
    }

    public function login(Request $request)
    {

        // $fields = $request->validate([
        //     'email' => 'required|string|unique:users,email',
        //     'pasword' => 'required|string|confirmed'
        // ]);
        // $user = User::where('email', $fields['email'])->first();
        // //$token = $user->createToken('myapptoken')->plainTextToken;

        // $credentials = request(['email','password']);

        // if(!Auth::attempt($credentials))
        // {
        //     return response()->json([
        //         'status_code' => 500,
        //         'message' => 'Unauthorized'
        //     ]);
        // }

        // $response = [
        //     'user' => $user,
        //     //'token' => $token
        // ];

        // return response($response, 201);
        $validator = Validator::make ($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request']);
        }
        $credentials = request(['email','password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json([
                'status_code' => 500,
                'message' => 'Unauthorized'
            ]);
        }

        $user = User::where('email', $request->email)->first();

        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status_code' => 200,
            'user' => $user,
            'token' => $tokenResult
        ]);
    }

    public function logout(Request $request){

        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status_code' => 200,
            'message' => 'Token deleted successfully'
        ]);
    }


}
