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

Route::get('/artists/abdulaziz', function () {
    return view('artists.abdulaziz');
});

Route::get('/artists/buthaina', function () {
    return view('artists.buthaina');
});

Route::get('/artists/shihab', function () {
    return view('artists.shihab');
});

Route::get('/artists/mais', function () {
    return view('artists.mais');
});

Route::get('/artists/abdullah', function () {
    return view('artists.abdullah');
});