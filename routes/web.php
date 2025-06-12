<?php

// use App\Http\Controllers\FashionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionController;
// use App\Http\Controllers\Controller;

Route::get('/', [FashionController::class, 'home'])->name('home');
Route::get('/products', [FashionController::class, 'products'])->name('products');
Route::get('/about', [FashionController::class, 'about'])->name('about');
Route::get('/contact', [FashionController::class, 'contact'])->name('contact');

// Route::get('/', [Controller::class, 'home'])->name('home');
