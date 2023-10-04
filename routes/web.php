<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/layanan', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::resource('/blogs', BlogController::class)->parameters([
    'blogs' => 'blog:slug'
])->only(['index', 'show']);

require __DIR__.'/auth.php';
