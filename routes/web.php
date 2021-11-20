<?php

use App\Http\Controllers\AcceptFormController;
use App\Http\Controllers\job_place_controller;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\supervisor_controller;
use App\Http\Controllers\TimeTableController;
use App\Models\RequestForm;
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
Route::get('/supervisor/{supervisor}/student/create' , [StudentController::class, 'create'])->name('create_student');
Route::post('/student' , [StudentController::class, 'store'])->name('post_student');
Route::get('/supervisor/{supervisor}/student/{student}' , [StudentController::class, 'show'])->name('student.show');

Route::get('/supervisor/{supervisor}/student/{student}/time_table/{accepted_form}' , [TimeTableController::class, 'show'])->name('time_table.show');



Route::get('/supervisor/{supervisor}/student/{student}/form/crate',[RequestFormController::class , 'create'])->name('form');
Route::post('/supervisor/{supervisor}/student/{student}/form',[RequestFormController::class , 'store'])->name('form.store');
Route::delete('/form/{id}/{place}',[RequestFormController::class , 'destroy'])->name('form.delete');


Route::get('/job_place' , [job_place_controller::class, 'create'])->name('create_place');
Route::post('/job_place' , [job_place_controller::class, 'store']);
Route::get('/job_place/{job_place}' , [job_place_controller::class, 'show'])->name('show_place');

Route::get('/job_place/{job_place}/time_table/{accepted_form}/student/{student}' , [TimeTableController::class, 'edit'])->name('time_table.edit');
Route::put('/date/{id}/status/{status}' , [TimeTableController::class, 'update'])->name('time_table.update');

Route::get('/job_place/{job_place}/request_form/{id}/student/{name}/accept_form' , [AcceptFormController::class, 'create'])->name('accept.create');
Route::post('/job_place/{job_place}/request_form/{id}/accept_form' , [AcceptFormController::class, 'store'])->name('accept.store');























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
