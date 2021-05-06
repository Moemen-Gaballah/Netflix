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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/movies', [App\Http\Controllers\HomeController::class, 'showMovies'])->name('showMovies');

Route::get('/entity/{id}', [App\Http\Controllers\HomeController::class, 'getEntity'])->name('showMovies');


Route::get('/watch/{id}', [App\Http\Controllers\HomeController::class, 'getWatch'])->name('getWatch');


// Progress Videos 
Route::post('/ajax/getProgress', [App\Http\Controllers\HomeController::class, 'getProgress'])->name('getProgress');

Route::post('/ajax/addDuration', [App\Http\Controllers\HomeController::class, 'addDuration'])->name('addDuration');

Route::post('/ajax/updateDuration', [App\Http\Controllers\HomeController::class, 'updateDuration'])->name('updateDuration');
Route::post('/ajax/setFinished', [App\Http\Controllers\HomeController::class, 'setFinished'])->name('setFinished');
