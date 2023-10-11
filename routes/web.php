<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/home',[ClassroomController::class,'home']);
});

//subject
Route::get('/addsubject', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects/{subject_id}',[SubjectController::class,'store'])->name('subjects.store');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');

Route::get('/homework/create', 'HomeworkController@create')->name('homework.create');
Route::post('/homework', 'HomeworkController@store')->name('homework.store');
Route::get('/homework/{id}/edit', 'HomeworkController@edit')->name('homework.edit');
Route::put('/homework/{id}', 'HomeworkController@update')->name('homework.update');
