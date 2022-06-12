<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;


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


// if (App::environment() == "production") {
if (false) {

    URL::forceScheme('https');

    Route::get('/', function () {
        return view('home')->with('reviews', Review::latest()->take(3)->get());
    })->name('home');

    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('portrait', function () {
        return view('portrait');
    })->name('portrait');

    Route::get('wedding', function () {
        return view('wedding');
    })->name('wedding');

    Route::resource('details', DetailController::class);

    Route::get('contact/index', [ContactController::class, 'index']);
    Route::get('contact', [ContactController::class, 'create'])->name('contact');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
    // Route::get('reviews/create', ContactController::class,'create');
    Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::controller(GalleryController::class)->group(function () {
        Route::get('/gallery/wedding', 'wedding');
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';
}
else{

    Route::get('/', function () {
        return view('home')->with('reviews', Review::where('stars', 5)->latest()->take(3)->get());
    })->name('home');

    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('portrait', function () {
        return view('portrait');
    })->name('portrait');

    Route::get('wedding', function () {
        return view('wedding');
    })->name('wedding');

    Route::resource('details', DetailController::class);

    Route::get('contact/index', [ContactController::class, 'index']);
    Route::get('contact', [ContactController::class, 'create'])->name('contact');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
    // Route::get('reviews/create', ContactController::class,'create');
    Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::controller(GalleryController::class)->group(function () {
        Route::get('/gallery/wedding', 'wedding')->name('gallery-wedding');
        Route::get('/gallery/wedding', 'wedding')->name('gallery-seniors');
        Route::get('/gallery/wedding', 'wedding')->name('gallery-couples');
        Route::get('/gallery/wedding', 'wedding')->name('gallery-maternity');
        Route::get('/gallery/wedding', 'wedding')->name('gallery-real-estate');
        Route::get('/gallery/wedding', 'wedding')->name('gallery-family');

    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';
}