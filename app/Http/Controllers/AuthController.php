<?php

namespace App\Http\Controllers;

use App\Models\loginstudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    use HasApiTokens;

    public function register(Request $request){
        return loginstudent::create([
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
        if(!Auth::attempt($request->only(keys:'email')) && !Auth::attempt($request->only(keys:'password')))
        {
           return response(['message' => 'Invalid credentials'], status:Response::HTTP_UNAUTHORIZED);
        }
                $user = Auth::user();
                //$token = $user->createToken('token')->plainTextToken;
                return $user;
    }


}
