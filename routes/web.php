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

Route::group([
    'as' => 'workshops.',
    'prefix' => 'workshops',
    /*'middleware' => 'auth'*/
], function (){
    Route::get('/', [WorkshopsController::class, 'index'])->name('index');
    Route::get('/create', [WorkshopsController::class, 'create'])->name('create');
    Route::post('/', [WorkshopsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [WorkshopsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [WorkshopsController::class, 'update'])->name('update');
    Route::delete('/{id}', [WorkshopsController::class, 'destroy'])->name('destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
