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
Route::get('/lash', function () {
    return view('livewire.pages.lashPage');
});
Route::get('/brows', function () {
    return view('livewire.pages.browsPage');
});
Route::get('/waxing', function () {
    return view('livewire.pages.waxingPage');
});
Route::get('/spray', function () {
    return view('livewire.pages.sprayPage');
});
Route::get('/sauna', function () {
    return view('livewire.pages.saunaPage');
});
Route::get('/facial', function () {
    return view('livewire.pages.facialPage');
});
Route::get('/sculpt', function () {
    return view('livewire.pages.sculptPage');
});
Route::get('/laser', function () {
    return view('livewire.pages.laserpage');
});
Route::get('/massage', function () {
    return view('livewire.pages.massagepage');
});

require __DIR__.'/auth.php';
