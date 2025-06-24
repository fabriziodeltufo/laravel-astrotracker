<?php

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;


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


// HOME PAGE
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// NEO PAGE
Route::get('/api-demo', function () {
    return view('api-demo');
});

// ABOUT PAGE
Route::get('/about', function () {
    return view('about');
});

// CONTACT PAGE
Route::get('/contact' , [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact' , [ContactController::class, 'storeContactForm'])->name('contact-form.store');

// BLOG PAGE
Route::resource('posts', PostController::class);


// AUTH
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';