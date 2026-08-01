<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['waitlistCount' => 347]);
});
