<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

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
    return view('home')->with('reviews', Review::latest()->take(2)->get());
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

Route::get('contact', [ContactController::class, 'index']);
Route::get('contact/create', [ContactController::class, 'create'])->name('contact');
Route::post('contact', [ContactController::class, 'store']);

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
// Route::get('reviews/create', ContactController::class,'create');
Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
