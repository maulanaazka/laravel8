<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() // jika hanya memilki 1 method
    {
        return view('home');
    }
}
