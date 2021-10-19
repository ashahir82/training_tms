<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TempahanKenderaanControlller;
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
    return view('welcome');
});

Route::get('tempahan-kenderaan', [TempahanKenderaanControlller::class, 'index']);


/**
 * Route Student
 */
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/show/{id}', [StudentController::class, 'show']);
Route::get('/student/edit/{id}', [StudentController::class, 'edit']);

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::post('/student/update/{id}', [StudentController::class, 'update']);
