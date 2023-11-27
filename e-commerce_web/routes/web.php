<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppManager;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', [AppManager::class, 'login'])->name('login');
Route::post('/login', [AppManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AppManager::class, 'registration'])->name('registration');
Route::post('/registration', [AppManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AppManager::class, 'logout'])->name('logout');

Route::middleware(['auth.check'])->group(function () {
    Route::get('/myaccount', [AppManager::class, 'myaccount'])->name('myaccount');
    Route::put('/myaccount', [AppManager::class, 'myaccountupdate'])->name('myaccount.post');
});

Route::get('/addresses', [AppManager::class, 'addresses'])->middleware('auth.check')->name('addresses'); 

Route::get('/orders', [AppManager::class, 'orders'])->middleware('auth.check')->name('orders'); 

Route::get('/store', function () {
    return view('.include.store.store');
})->name('store');

Route::get('/store/productview/{id}', function ($id) {
    $product = Product::find($id);
    return view('.include.store.productview', compact('product'));
})->name('productview');

Route::match(['get', 'post'], '/cart', [AppManager::class, 'cart'])->middleware('auth.check')->name('cart');

Route::post('/updatecart', [AppManager::class, 'updateCart'])->middleware('auth.check')->name('updatecart');

Route::get('/updatedcart', [AppManager::class, 'updatedCart'])->middleware('auth.check')->name('updatedcart');

Route::get('/cartview', [AppManager::class, 'showCartView'])->middleware('auth.check')->name('cartview');

Route::get('/drop-items', [AppManager::class, 'dropItems'])->middleware('auth.check')->name('drop.items');

Route::get('/orderdetails', [AppManager::class, 'orderdetails'])->middleware('auth.check')->name('orderdetails'); 

Route::post('/placeorder', [AppManager::class, 'placeOrder'])->middleware('auth.check')->name('placeorder');  

Route::get('/about', function () {
    return view('.include.about.about');
})->name('about');

Route::get('/about', function () {
    return view('.include.about.about');
})->name('about');

Route::get('/contact', function () {
    return view('.include.contact.contact');
})->name('contact');

Route::get('/contact/writeamessage', function () {
    return view('.include.contact.writemessage');
})->name('writemessage');

Route::post('/contact/writeamessage', [AppManager::class, 'writemessagePost'])->name('writemessage.post');

Route::get('/explore', function () {
    return view('.include.explore.explore');
})->name('explore');

