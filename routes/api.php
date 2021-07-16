<?php

use App\Http\Controllers\newstudentController;
use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use App\Http\Controllers\studentcoreController;
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
Route::get('/getnewstudentm1', [newstudentm1Controller::class, 'index']);
Route::post('/newstudentm1', [newstudentm1Controller::class, 'store']);
Route::get('/getnewstudentm1/{id}', [newstudentm1Controller::class, 'show']);
Route::put('editnewstudentm1/{id}', [newstudentm1Controller::class, 'update']);
Route::delete('deletenewstudentm1/{id}', [newstudentm1Controller::class, 'destroy']);
//NewstudentM4
Route::get('/getnewstudentm4', [newstudentm4Controller::class, 'index']);
Route::post('/newstudentm4', [newstudentm4Controller::class, 'store']);
Route::get('/getnewstudentm4/{id}', [newstudentm4Controller::class, 'show']);
Route::put('editnewstudentm4/{id}', [newstudentm4Controller::class, 'update']);
Route::delete('deletenewstudentm4/{id}', [newstudentm4Controller::class, 'destroy']);
//StudentInformationCore
Route::get('/getstudentcore', [studentcoreController::class, 'getAll']);


//Test
Route::get('/test', [newstudentController::class, 'getAll']);
Route::post('/testadd', [newstudentController::class, 'create']);
Route::post('/testadd2', [newstudentController::class, 'store']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
