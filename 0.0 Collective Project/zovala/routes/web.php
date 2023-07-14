<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
    return view('re');
    echo "<h1>Default Request</h1>";
});
// controller->all();
//roles routes
Route::get('roles',[RoleController::class,'all']);
Route::get('role/all',[RoleController::class,'all']);
Route::get('role/add',[RoleController::class,'add']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::post('role/save',[RoleController::class,'save']);
Route::post('role/saveChanges/{id}',[RoleController::class,'saveChanges']);
Route::get('role/delete/{id}',[RoleController::class,'delete']);
 



//users roles
Route::get('users',[UserController::class,'all']);

//materials