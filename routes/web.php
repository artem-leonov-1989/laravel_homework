<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\MachineController;

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
})->name('handbook');

Route::group([
    'as' => 'workshops.',
    'prefix' => 'workshops',
    /*'middleware' => 'auth'*/
], function (){
    Route::get('/', [WorkshopController::class, 'index'])->name('index');
    Route::get('/create', [WorkshopController::class, 'create'])->name('create');
    Route::post('/', [WorkshopController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [WorkshopController::class, 'edit'])->name('edit');
    Route::put('/{id}', [WorkshopController::class, 'update'])->name('update');
    Route::delete('/{id}', [WorkshopController::class, 'destroy'])->name('destroy');
});

Route::group([
    'as' => 'machines.',
    'prefix' => 'machines',
], function (){
    Route::get('/', [MachineController::class, 'index'])->name('index');
    Route::delete('/{id}', [MachineController::class, 'destroy'])->name('destroy');
    Route::get('/create', [MachineController::class, 'create'])->name('create');
    Route::post('/', [MachineController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [MachineController::class, 'edit'])->name('edit');
    Route::put('/{id}', [MachineController::class, 'update'])->name('update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
