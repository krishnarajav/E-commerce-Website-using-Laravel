<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/menu', function () {
    return view('.include.menu');
})->name('menu');

Route::get('/orders', function () {
    return view('include.orders');
})->middleware('auth.check')->name('orders');

Route::get('/about', function () {
    return view('.include.about');
})->name('about');

Route::get('/contact', function () {
    return view('.include.contact');
})->name('contact');

Route::get('/explore', function () {
    return view('.include.explore');
})->name('explore');