<?php

use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//NewstudentM1
Route::get('/newstudentm1', [newstudentm1Controller::class, 'index']);
Route::post('/newstudentm1', [newstudentm1Controller::class, 'store']);
Route::resource('/newstudentm1', newstudentm1Controller::class);
//NewstudentM4
Route::get('/newstudentm4', [newstudentm4Controller::class, 'index']);
Route::post('/newstudentm4', [newstudentm4Controller::class, 'store']);
Route::resource('/newstudentm4', newstudentm4Controller::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
