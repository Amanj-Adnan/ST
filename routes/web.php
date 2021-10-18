<?php

use App\Http\Controllers\job_place_controller;
use App\Http\Controllers\supervisor_controller;
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
    return view('home.home');
})->name('root');

Route::get('/supervisor' , [supervisor_controller::class, 'create'])->name('create_supervisor');
Route::post('/supervisor' , [supervisor_controller::class, 'store']);
Route::get('/supervisor/{supervisor}' , [supervisor_controller::class, 'show'])->name('show_supervisor');

Route::get('/job_place' , [job_place_controller::class, 'create'])->name('create_place');
Route::post('/job_place' , [job_place_controller::class, 'store']);
Route::get('/job_place/{job_place}' , [job_place_controller::class, 'show'])->name('show_place');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
