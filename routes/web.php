<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

// contact page 
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// homepage default
Route::get('/', function () {
    return view('home');
});


// home page
Route::get('/home', function () {
    return view('home');
});

// api-demo page
Route::get('/api-demo', function () {
    return view('api-demo');
});


// about page 
Route::get('/about', function () {
    return view('about');
});


// contact page 
// use App\Http\Controllers\ContactController;

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
// Route::get('/contact', function () {
//     return view('contactForm');
// });


// blog page
Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

// single post
Route::get('posts/{post}', function($id){

    return view('post', [
        'post' => Post::findOrFail($id)
    ]);
});

// single post page
// Route::get('posts/{post}', function ($slug) {

//     $post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");

//        return view('post', [
//         'post' => $post 
//          ]);
// });




// Laravel page
Route::get('/laravel', function () {
    return view('laravel');
    });
    


    








    
// ->where('post', '[A-z_\-]+');






// ->where( 'post', '[A-z_\-]+' ); //oppure  whereAlpha('post)') x alfanumerici op whereNumber('post') solo numeri

// $path = __DIR__ . "/" . "../resources/posts/{$slug}.html";