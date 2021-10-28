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
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1',[CustomerController::class,'index']);

Route::get('/test1/create', [CustomerController::class,'create']);
Route::post('/test1',[CustomerController::class,'store']);
Route::get('/test1/{id}', [CustomerController::class,'show']);



