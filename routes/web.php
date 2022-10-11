<?php

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

Route::get('/', \App\Http\Livewire\HomeComponent::Class)->name('home.index');
Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('shop.cart');
Route::get('/checkout',\App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');
