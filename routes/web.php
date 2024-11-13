<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/company','company')->name('company');
Route::view('/solutions','solutions')->name('solutions');
Route::view('/products','products')->name('products');
Route::view('/contact-us','contact-us')->name('contact');
Route::view('/case-study','case-study')->name('case-study');

//Route::view('/dashboard','dashboard')->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
