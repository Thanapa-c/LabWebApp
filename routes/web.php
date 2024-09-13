<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;
use App\Http\Controllers\subjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/car',[carController::class,"index"])->name('car');

Route::get('/subject',[subjectController::class,"index"])->name('subject.index');
Route::post('/subject/insert',[subjectController::class,"insert"])->name('subject.insert');

Route::get('/subject/delete/{sub_id}',[subjectController::class,"delete"])->name('subject.delete');