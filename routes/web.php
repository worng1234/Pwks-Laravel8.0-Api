<?php

use App\Http\Controllers\newstudentController;
use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use App\Http\Controllers\studentcoreController;
use App\Http\Controllers\behaviorstudentController;
use App\Http\Controllers\testController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\newstudentm1Model;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/AddstudentCore','Studentcore.addstudentcore');

//NewstudentRegister
Route::get('/AgreeMentNewstudentRegisterM1', [newstudentm1Controller::class, 'agreementNewstudentm1'] );
Route::get('/AgreeMentNewstudentRegisterM4', [newstudentm1Controller::class, 'agreementNewstudentm4'] );
Route::post('/NewstudentRegisterM1', [newstudentm1Controller::class, 'Newstudentm1'] );
Route::post('/NewstudentRegisterM4', [newstudentm1Controller::class, 'Newstudentm4'] );
Route::get('/SortNewstudentM1', [newstudentm1Controller::class, 'Sortnewstudentm1'] );
Route::get('/SortNewstudentM4', [newstudentm1Controller::class, 'Sortnewstudentm4'] );
Route::get('/NewstudentM1byID', [newstudentm1Controller::class, 'Newstudentm1byID'] );
Route::get('/NewstudentM4byID', [newstudentm1Controller::class, 'Newstudentm4byID'] );
Route::put('/FixprofileNewstudentM1', [newstudentm1Controller::class, 'Fixprofilenewstudentm1'] );
Route::put('/FixprofileNewstudentM4', [newstudentm1Controller::class, 'Fixprofilenewstudentm4'] );

//Studentcore
Route::get('/StudentCore', function () {
    return view('Studentcore.studentcore');
});
