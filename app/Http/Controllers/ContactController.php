<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        dd('submitted'); // die n dump
        // ddd('submitter'); // die, dump, n debug
    }
}
