<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $waitlistCount = 347; // TODO: remplacer par DB count plus tard
    return view('home', compact('waitlistCount'));
});
