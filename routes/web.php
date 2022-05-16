<?php

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

Route::get('/',[App\Http\Controllers\CustomerController::class,'index']);


Route::get('/show/{customer}',[App\Http\Controllers\CustomerController::class,'show']);
Route::get('/update/{customer}',[App\Http\Controllers\CustomerController::class,'update']);
Route::get('/delete/{customer}',[App\Http\Controllers\CustomerController::class,'destroy']);
Route::get('/scan',[App\Http\Controllers\ScanController::class,'scan']);
