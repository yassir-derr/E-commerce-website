<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController; 

// Other necessary imports can go here
Route::get('/', [FrontendController::class, 'home'])->name('home');
// Define other routes for the frontend
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/collection',[FrontendController::class, 'collection'])->name('collection');




Route::get('/login', [BackendController::class, 'login'])->name('login');
Route::get('/register', [BackendController::class, 'register'])->name('register');