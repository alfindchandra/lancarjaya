<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;


// Locale switching route
Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Main website routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/products', [HomeController::class, 'index'])->name('products');
Route::get('/services', [HomeController::class, 'index'])->name('services');
Route::get('/contact', [HomeController::class, 'index'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
