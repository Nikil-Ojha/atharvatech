<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('index'))->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/services', fn () => view('services'))->name('services');
Route::get('/blog', fn () => view('blog'))->name('blog');
Route::get('/blog-detail', fn () => view('detail'))->name('detail');
Route::get('/pricing', fn () => view('price'))->name('price');
Route::get('/quote', fn () => view('quote'))->name('quote');
Route::get('/team', fn () => view('team'))->name('team');
Route::get('/testimonial', fn () => view('testimonial'))->name('testimonial');
Route::get('/features', fn () => view('feature'))->name('feature');
Route::get('/contact', fn () => view('contact'))->name('contact');
