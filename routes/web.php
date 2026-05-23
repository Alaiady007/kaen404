<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
});

Route::get('/cafeteria', function () {
    $products = Product::where('active', true)->latest()->get();

    return view('cafeteria', [
        'products' => $products,
    ]);
});

Route::get('/artists', function () {
    return view('artists');
});

Route::get('/about', function () {
    return view('about');
});