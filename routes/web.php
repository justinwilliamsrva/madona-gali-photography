<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReviewController;
use App\Models\Contact;
use App\Models\Review;
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

    Route::get('/', function () {
        $images['banner'] = 'https://live.staticflickr.com/65535/52162186580_6f3ee285df_o.jpg';
        $images['wedding'] = 'https://live.staticflickr.com/65535/52161698801_2e7dca9bfd_b.jpg';
        $images['couples'] = 'https://live.staticflickr.com/65535/52162186590_03fdcbc125_o.jpg';
        $images['seniors'] = 'https://live.staticflickr.com/65535/52161936529_a85fb13629_b.jpg';
        $images['family'] = 'https://live.staticflickr.com/65535/52161936449_0d388a3662_o.jpg';
        $images['maternity'] = 'https://live.staticflickr.com/65535/52161936474_dbc6225ffe_b.jpg';
        $images['real-estate'] = 'https://live.staticflickr.com/65535/52161698791_41a86c9fa6_b.jpg';

        return view('home')->with(['reviews' => Review::where('stars', 5)->latest()->take(3)->get(), 'images' => $images,]);
    })->name('home');

    Route::get('about', function () {
        $images['body'] = 'https://live.staticflickr.com/65535/52160678462_9d650c2a55_b.jpg' ;
        $images['banner']= 'https://live.staticflickr.com/65535/52160678462_9d650c2a55_b.jpg';
        $images['banner-md']= 'https://live.staticflickr.com/65535/52178289849_72220d3773_b.jpg';
        $images['banner-lg']= 'https://live.staticflickr.com/65535/52162188140_e6c9f5ff44_b.jpg';

        return view('about')->with('images', $images);
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
        Route::get('/gallery/seniors', 'seniors')->name('gallery-seniors');
        Route::get('/gallery/couples', 'couples')->name('gallery-couples');
        Route::get('/gallery/maternity', 'maternity')->name('gallery-maternity');
        Route::get('/gallery/real-estate', 'real_estate')->name('gallery-real-estate');
        Route::get('/gallery/family', 'family')->name('gallery-family');

    });

    Route::get('/dashboard', function () {

        $messages = Contact::latest()->paginate(3, ['*'], 'messages');
        $reviews = Review::latest()->paginate(3, ['*'], 'reviews');

        return view('dashboard', ['messages' => $messages, 'reviews' => $reviews]);
    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';
