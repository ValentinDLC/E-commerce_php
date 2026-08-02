<?php

use Illuminate\Support\Facades\Route;
use App\Support\Products;

Route::get('/', function () {
    return view('home', ['waitlistCount' => 347]);
});

Route::get('/collection', function () {
    return view('collection', ['products' => Products::all()]);
});

Route::get('/produit/{slug}', function (string $slug) {
    $product = Products::find($slug);
    abort_if(!$product, 404);

    $related = array_slice(array_filter(Products::all(), fn($p) => $p['slug'] !== $slug), 0, 3);

    return view('product', ['product' => $product, 'related' => $related]);
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/favoris', function () {
    return view('wishlist');
});

Route::get('/mentions-legales', function () {
    return view('legal.mentions');
});

Route::get('/cgv', function () {
    return view('legal.cgv');
});
