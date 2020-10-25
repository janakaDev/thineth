<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthenticationController;

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



Route::get('login', [MainController::class, 'showLogin']);
Route::get('about', [MainController::class, 'about']);
Route::get('courses', [MainController::class, 'courses']);
Route::get('events', [MainController::class, 'events']);
Route::get('pricing', [MainController::class, 'pricing']);
Route::get('lecturers', [MainController::class, 'lecturers']);
Route::get('contact', [MainController::class, 'contact']);
Route::post('login', [AuthenticationController::class, 'processLogin']);
Route::post('register', [AuthenticationController::class, 'regiister']);
Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('dashboard',  [MainController::class, 'dashboard'])->name('dashboard');
});

Route::get('/', function () {
    return view('home');
});