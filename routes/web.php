<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// parameter 1 -> url, parameter 2 -> view,
// Route::view('/', 'home');


// $appName = "Laravel 8";
// Route::view('/', 'home', compact('appName'));
// kekurangannya variable tidak bisa langsung masuk ke route nya.


// mengarahkan ke file ..\view\home.blade.php
// Route::get('/', fn () => view('home'));
// Route::get('/', fn () => dd(asset('css/app.css'))); // php 7.4
// dd => die n dump
// asset => membuat full url project kita, dan menarget folder public


// Route::get('profile', function() {

//     $name = "Azka";

//     // compact('name') = ['name' => $name]
//     // harus sama property ('name') dan valuenya ($name)
//     return view('profile', compact('name'));
// });


// Route::view('contact', 'contact');

// Route::view('about', 'about');

// melakukan request data dari url
// Route::get('profile/', function(Request $request) {
//     $name = $request->name;
//     return view('profile', ['name' => $name]);
// });

// menambahkan wildcard pada url
// Route::get('profile/{username}', function($username) {
//     return view('profile', ['name' => $username]);
// });

Route::get('/', HomeController::class);

Route::get('profile/{identifier}', ProfileInformationController::class);

Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('contact', [ContactController::class, 'create']);
// gunakan post jika ada action (create db, sending email, dsb)
Route::post('contact', [ContactController::class, 'store']);
