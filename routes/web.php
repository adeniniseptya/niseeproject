<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/
Route::view('/', 'index')->name('index');
Route::view('/catalog', 'catalog')->name('catalog');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/how-it-works', 'how-it-works')->name('how.it.works');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/order', 'order')->name('order');

/*
|--------------------------------------------------------------------------
| GOOGLE LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/auth/google', [GoogleLoginController::class, 'redirect'])
    ->name('google.redirect');

Route::get('/auth/google/callback', [GoogleLoginController::class, 'callback'])
    ->name('google.callback');

/*
|--------------------------------------------------------------------------
| DASHBOARD (AUTH + VERIFIED)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| AUTH USER ROUTES (PROFILE + ORDERS)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /** PROFILE (SHOW PAGE) */
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

    /** EDIT PROFILE */
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    /** DELETE ACCOUNT */
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /** ORDERS */
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::post('/orders/{order}/review', [OrderController::class, 'review'])->name('orders.review');
});

require __DIR__.'/auth.php';
