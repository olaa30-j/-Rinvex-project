<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShoppingCart;
use App\Livewire\Checkout;
use App\Http\Livewire\ProductList;

Route::get('/', ProductList::class)->name('home');
Route::get('/cart', ShoppingCart::class)->name('cart');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::view('/', 'welcome');

Route::get('/products', ProductList::class)->name('products');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
