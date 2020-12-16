<?php

use App\Http\Controllers\ProfileEventController;
use App\Http\Controllers\ProfilePictureController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/event/create',[EventController::class, 'create']);
Route::post('/event/create',[EventController::class, 'store']);
Route::get('/profile/event', [ProfileEventController::class, 'index']);
Route::get('/profile/pic', [ProfilePictureController ::class, 'edit']);
Route::patch('/profile/pic', [ProfilePictureController ::class, 'update']);