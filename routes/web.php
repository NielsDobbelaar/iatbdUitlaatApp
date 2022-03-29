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

Route::Get('/oppassers/create', [\App\Http\Controllers\OppasserController::class, 'create']);
Route::Post('/oppassers', [\App\Http\Controllers\OppasserController::class, 'store']);
Route::get('/oppassers/{id}', [\App\Http\Controllers\OppasserController::class,'show']);
Route::get('/oppassers', [\App\Http\Controllers\OppasserController::class,'index']);

Route::get('/dieren', [\App\Http\Controllers\DierController::class,'index']);

Route::get('/', [\App\Http\Controllers\OppasserController::class,'index']);
