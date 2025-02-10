<?php

use App\Http\Controllers\PorfolioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('portfolio.index');
});
Route::post('/contact', [PorfolioController::class, 'submit'])->name('contact.submit');

