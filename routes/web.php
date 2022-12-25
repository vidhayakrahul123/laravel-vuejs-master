<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

/**
 * UI Links
 */
Route::get('/add-student'      ,[SystemController::class,'crud']);
Route::get('/view-student'     ,[SystemController::class,'crud']);
Route::get('/edit-student/{Id}',[SystemController::class,'crud']);

Route::group(['prefix' => 'api'], function(){  
     /** 
      * API POST link 
      */
      Route::post('/add-student'          ,[StudentController::class,'addStudent']);
      Route::get('/get-all-student'       ,[StudentController::class,'allStudent']);
      Route::get('/edit-student/{Id}'     ,[StudentController::class,'editStudent']);
      Route::post('/update-student/{Id}'  ,[StudentController::class,'updateStudent']);
      Route::get('/delete-student/{Id}'   ,[StudentController::class,'deleteStudent']);
 });