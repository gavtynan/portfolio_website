<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Home route using a Blade view
Route::get('/', function () {
    return view('home'); // This should correspond to 'resources/views/home.blade.php'
});
Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');