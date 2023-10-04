<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/layanan', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::resource('/blogs', BlogController::class)->parameters([
    'blogs' => 'blog:slug'
])->only(['index', 'show']);