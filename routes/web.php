<?php

use Illuminate\Support\Facades\Route;

// parameter 1 -> url, parameter 2 -> view,
// Route::view('/', 'home');


// $appName = "Laravel 8";
// Route::view('/', 'home', compact('appName'));
// kekurangannya variable tidak bisa langsung masuk ke route nya.


// mengarahkan ke file ..\view\home.blade.php
Route::get('/', fn () => view('home'));
// Route::get('/', fn () => dd(asset('css/app.css'))); // php 7.4
// dd => die n dump
// asset => membuat full url project kita, dan menarget folder public


// Route::get('profile', function() {

//     $name = "Azka";

//     // compact('name') = ['name' => $name]
//     // harus sama property ('name') dan valuenya ($name)
//     return view('profile', compact('name'));
// });


Route::view('contact', 'contact');

Route::view('profile', 'profile');

Route::view('about', 'about');
