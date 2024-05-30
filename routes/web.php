<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HariamuChildController;
use App\Http\Controllers\DolpinChildController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
// use 

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/animal', [AnimalController::class, 'index'])->name('animal');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// detail 
Route::get('/animal/harimau', [HariamuChildController::class, 'index'])->name('harimau.detail');
Route::get('/animal/dolpin', [DolpinChildController::class, 'index'])->name('dolpin.detail');





// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::get('/animals', function () {
//     return view('animals');
// });



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


