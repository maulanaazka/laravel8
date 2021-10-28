<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');

$appName = "Laravel 8";
Route::view('/', 'home', compact('appName'));
// kekurangannya variable tidak bisa langsung masuk ke route nya.


// mengarahkan ke file ..\view\home.blade.php
# Route::get('/', fn () => view('home')); // php 7.4


// parameter kedua untuk akses url ".../profile"
Route::get('profile', function() {

    $name = "Azka";

    // compact('name') = ['name' => $name]
    // harus sama property ('name') dan valuenya ($name)
    return view('profile', compact('name'));
});
