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
Route::middleware(['auth', 'hasPage'])->group(function (){
    Route::POST('/aanvraag', [\App\Http\Controllers\AanvraagController::class,'store']);
});

Route::get('/', function(){
    return view('welcome');
});

Route::middleware(['auth', 'isBlocked'])->group(function (){
    Route::get('/oppassers/create', [\App\Http\Controllers\OppasserController::class,'create']);
    Route::get('/oppassers/{id}', [\App\Http\Controllers\OppasserController::class,'show']);


    Route::get('/reviews/create/{id}', [\App\Http\Controllers\ReviewController::class,'create']);

    Route::get('/dieren', [\App\Http\Controllers\DierController::class,'index']);
    Route::get('/dieren/create', [\App\Http\Controllers\DierController::class,'create']);
    Route::get('/dieren/{id}', [\App\Http\Controllers\DierController::class,'show']);


    Route::POST('/dieren', [\App\Http\Controllers\DierController::class,'store']);
    Route::POST('/oppassers', [\App\Http\Controllers\OppasserController::class,'store']);
    Route::POST('/reviews', [\App\Http\Controllers\ReviewController::class,'store']);

    Route::get('/aanvraag/{id}/edit', [\App\Http\Controllers\AanvraagController::class, 'edit']);

    Route::DELETE('/aanvraag/{id}', [\App\Http\Controllers\AanvraagController::class, 'destroy']);
});

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/admin/create', [\App\Http\Controllers\AdminController::class,'create']);
    Route::POST('/admin', [\App\Http\Controllers\AdminController::class,'store']);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
