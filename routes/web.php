<?php

use Illuminate\Support\Facades\Route;

Route::resource("student",App\Http\Controllers\StudentController::class)->middleware('auth');

Route::redirect("/","/student");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
