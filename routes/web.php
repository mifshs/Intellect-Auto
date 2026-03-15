<?php

use App\Http\Controllers\ProfileController;
use App\Models\Product;
use App\Models\NewsPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    $news_pages = NewsPage::all();
    return view('landing', compact('products'), compact('news_pages'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    $products = Product::all();
    return view('index', compact('products'));
});
