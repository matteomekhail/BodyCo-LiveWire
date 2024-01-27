<?php

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

Route::view('/', 'welcome');

Route::get('/aftercare', function () {
    return view('livewire.pages.Aftercare');
});

Route::get('/MembershipBooking', function () {
    return view('livewire.pages.MembershipBooking');
});

Route::get('/book', function () {
    return view('livewire.pages.BookNow');
});

require __DIR__.'/auth.php';
