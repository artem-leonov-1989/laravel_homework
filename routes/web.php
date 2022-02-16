<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopsController;

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

Route::get('/handbook', function () {
    return view('handbook.index');
});

Route::get('/workshop', [WorkshopsController::class, 'index'])->name('workshops.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
