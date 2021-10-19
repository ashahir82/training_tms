<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TempahanKenderaanControlller;
use Illuminate\Routing\RouteGroup;
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
// Route::get('/', [StudentController::class, 'index']);
// Route::get('/create', [StudentController::class, 'create']);
// Route::get('/show/{id}', [StudentController::class, 'show']);
// Route::get('/edit/{id}', [StudentController::class, 'edit']);

// Route::post('/store', [StudentController::class, 'store'])->name('student.store');
// Route::post('/update/{id}', [StudentController::class, 'update']);

Route::prefix('student')->as('student.')->group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');

    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
});
